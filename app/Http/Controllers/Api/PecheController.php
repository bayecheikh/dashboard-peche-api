<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peche;

class PecheController extends Controller
{
    public function index(Request $request)
    {
        $query = Peche::with('site'); // inclure les infos du site
        
        // Filtre par région
        if($request->has('region')){
            $query->where('region', $request->region);
        }
        
        // Filtre par espèce
        if($request->has('espece')){
            $query->where('espece', $request->espece);
        }
        
        $peches = $query->get();

        // Format spécial pour Leaflet
        $peches = $peches->map(function($p){
            return [
                'region'   => $p->region,
                'espece'   => $p->espece,
                'quantite' => $p->quantite,
                'lat'      => $p->site?->lat,
                'lng'      => $p->site?->lng,
            ];
        });

        return response()->json($peches);
    }
}


