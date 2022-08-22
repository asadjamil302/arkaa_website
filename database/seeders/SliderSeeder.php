<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $slider = [
           

            [
                'title' =>'Lahore Smart City',
                'price'=>'PKR 268,500',
                'image' =>'slider.jpg',
                'description' =>'A New Era of Real Estate in Pakistan<br>
                ​​Good news for Lahore folks to maintain an eco-friendly and smart lifestyle. They can now achieve this feat with the mega real estate project - the Lahore Smart City.<br>
                Lahore Smart City is no longer a myth but an upcoming real estate project that is based on an area of 600 acres in the prime area of Lahore.',
                'meta_tag' =>'Lahore Smart City',
                'meta_title' =>'Lahore Smart City',
                'meta_description' =>'Lahore Smart City',      
            ],
            [
                'title' =>'Kings Town',
                'price'=>'PKR 200,000',
                'image' =>'slider.jpg',
                'description' =>'A stunning economical residential estate in Lahore<br>
                Previous projects by Al-Kabir Developers i.e., Al-Kabir Town Phase-I and Phase-II gathered enormous success. Kings Town is the latest project by Al-Kabir developers.<br>
                Lahore Smart City is no longer a myth but an upcoming real estate project that is based on an area of 600 acres in the prime area of Lahore.',
                'meta_tag' =>'Lahore Smart City',
                'meta_title' =>'Lahore Smart City',
                'meta_description' =>'Lahore Smart City',      
            ],

        ];
        foreach ($slider as $table) {
            Slider::create($table);
        }
    }
}
