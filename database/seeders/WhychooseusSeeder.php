<?php

namespace Database\Seeders;

use App\Models\Whychooseus;
use Illuminate\Database\Seeder;

class WhychooseusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $whychooseus = [
           

            [
                'title' =>'Trusted By Thousands',
                'icon' =>'flaticon-discord',
                'description' =>'With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.',
                'meta_tag' =>'Trusted By Thousands',
                'meta_title' =>'Trusted By Thousands',
                'meta_description' =>'Trusted By Thousands',      
            ],
            [
                'title' =>'Wide Renge Of Properties',
                'icon' =>'flaticon-house',
                'description' =>'With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.',
                'meta_tag' =>'Wide Renge Of Properties',
                'meta_title' =>'Wide Renge Of Properties',
                'meta_description' =>'Wide Renge Of Properties',      
            ],
            [
                'title' =>'Financing Made Easy',
                'icon' =>'flaticon-calculator',
                'description' =>'With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.',
                'meta_tag' =>'Financing Made Easy',
                'meta_title' =>'Financing Made Easy',
                'meta_description' =>'Financing Made Easy',      
            ],
            [
                'title' =>'See Neighborhoods',
                'icon' =>'flaticon-maps',
                'description' =>'With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.',
                'meta_tag' =>'See Neighborhoods',
                'meta_title' =>'See Neighborhoods',
                'meta_description' =>'See Neighborhoods',      
            ],
        ];
        foreach ($whychooseus as $table) {
            Whychooseus::create($table);
        }
    }
}
