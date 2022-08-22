<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $location = [
           

            [
                'city' =>'LAHORE',
                'description' =>'Office # 7, 5th Floor, Al-Lateef Center,<br> Main Boulevard Road, Gulberg-III, Lahore',
                'meta_tag' =>'LAHORE',
                'meta_title' =>'LAHORE',
                'meta_description' =>'LAHORE',      
            ],
            [
                'city' =>'ISLAMABAD',
                'description' =>' Office # 301, 3rd Floor, Plaza # 100D <br> Spring 
                North phase 7,<br> Bahria Town',
                'meta_tag' =>'ISLAMABAD',
                'meta_title' =>'ISLAMABAD',
                'meta_description' =>'ISLAMABAD',      
            ],
            
            [
                'city' =>'SAUDI ARABIA',
                'description' =>'Shaikh Abdul Rahman Ibn Hassan, Al Wizarat,<br> Riyadh 12624.',
                'meta_tag' =>'SAUDI ARABIA',
                'meta_title' =>'SAUDI ARABIA',
                'meta_description' =>'SAUDI ARABIA',      
            ],
             
            [
                'city' =>'UAE',
                'description' =>' Port Saeed, Al Riggah Building, 2nd floor Office # 209,<br> Abu Baker Al Siddique Road, Near Bassam Center, Diera, Dubai U.A.E.',
                'meta_tag' =>'UAE',
                'meta_title' =>'UAE',
                'meta_description' =>'UAE',      
            ],
            
        ];
        foreach ($location as $table) {
            Location::create($table);
        }
    }
}
