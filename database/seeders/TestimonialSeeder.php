<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $testimonial = [
           

            [
                'title' =>'Rashid Latif Mian',
                'designation' =>'CEO of RBS',
                'image' =>'testi1.jpg',
                'description' =>'We value our relationship with KtechZ. They’ve proven themselves to be capable and willing partners in numerous development projects, 
                and their ability to code in many environments gives us the confidence that we’ll be able to handle any new business opportunities that come our way.',
                'meta_tag' =>'Rashid Latif Mian',
                'meta_title' =>'Rashid Latif Mian',
                'meta_description' =>'Rashid Latif Mian`~',      
            ],
            [
                'title' =>'Sheraz Bilal',
                'designation' =>'CEO of Ojoit',
                'image' =>'testi2.jpg',
                'description' =>'I am very pleased with the project you have done, and especially your commitment to providing a quality solution when it meant going the extra mile to do so.',
                'meta_tag' =>'Sheraz Bilal',
                'meta_title' =>'Sheraz Bilal',
                'meta_description' =>'Sheraz Bilal',      
            ],
            [
                'title' =>'Shahid Rizvi',
                'designation' =>'IT Manager DOCE Foods',
                'image' =>'testi3.jpg',
                'description' =>'KtechZ offers highly skilled people and a high integrity approach. They are fast, effective, responsive, well managed, and always deliver what is needed or go beyond.',
                'meta_tag' =>'Shahid Rizvi',
                'meta_title' =>'Shahid Rizvi',
                'meta_description' =>'Shahid Rizvi',      
            ],

        ];
        foreach ($testimonial as $table) {
            Testimonial::create($table);
        }
    }
}
