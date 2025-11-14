<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peche;
use App\Models\Site;

class PechesTableSeeder extends Seeder
{
    public function run()
    {
        $kayar = Site::where('region','Kayar')->first();
        $dakar = Site::where('region','Cap Vert')->first();

        $peches = [
            ['region'=>'Kayar','espece'=>'Thiof','quantite'=>400,'site_id'=>$kayar->id],
            ['region'=>'Kayar','espece'=>'Sardinelle','quantite'=>600,'site_id'=>$kayar->id],
            ['region'=>'Dakar','espece'=>'Thiof','quantite'=>200,'site_id'=>$dakar->id],
            ['region'=>'Dakar','espece'=>'Sardinelle','quantite'=>500,'site_id'=>$dakar->id],
        ];

        foreach($peches as $p){
            Peche::create($p);
        }
    }
}
