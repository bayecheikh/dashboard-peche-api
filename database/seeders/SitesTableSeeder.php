<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;

class SitesTableSeeder extends Seeder
{
    public function run()
    {
        $sites = [
            [
                'nom' => 'Port de Kayar',
                'region' => 'Kayar',
                'lat' => 14.9189,
                'lng' => -17.1198
            ],
            [
                'nom' => 'Port Cap Vert',
                'region' => 'Cap Vert',
                'lat' => 14.7454,
                'lng' => -17.5238
            ]
        ];

        foreach($sites as $site){
            Site::create($site);
        }
    }
}
