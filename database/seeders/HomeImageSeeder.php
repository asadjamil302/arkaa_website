<?php

namespace Database\Seeders;

use App\Models\HomeImage;
use Illuminate\Database\Seeder;

class HomeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $image = [
            [
                'name' =>'website_logo',
                'image' => 'website_logo.jpg',
                'slug' => 'website_logo',
            ],
            [
                'name' =>'home_page_image',
                'image' => 'home_header_background_image.jpg',
                'slug' => 'home_page_image',
            ],
            [
                'name' =>'about_page_breadcrumb',
                'image' => 'About_breadcrumb.jpg',
                'slug' => 'about_page_breadcrumb',
            ],
            [
                'name' =>'contact_page_breadcrumb',
                'image' => 'contact_breadcrumb.jpg',
                'slug' => 'contact_page_breadcrumb',
            ],
            [
                'name' =>'project_page_breadcrumb',
                'image' => 'project_breadcrumb.jpg',
                'slug' => 'project_page_breadcrumb',
            ],
            [
                'name' =>'project_sub_page_breadcrumb',
                'image' => 'project_sub_breadcrumb.jpg',
                'slug' => 'project_sub_page_breadcrumb',
            ],
            [
                'name' =>'project_all_page_breadcrumb',
                'image' => 'all_project_page_breadcrumb.jpg',
                'slug' => 'project_all_page_breadcrumb',
            ],
            [
                'name' =>'all_dynamic_page_breadcrumb',
                'image' => 'dynamic_page_breadcrumb.jpg',
                'slug' => 'all_dynamic_page_breadcrumb',
            ],
            [
                'name' =>'about_us_page_image',
                'image' => 'about_us_page.jpg',
                'slug' => 'about_us_page_image',
            ],
            [
                'name' =>'home_page_background_fixed_image',
                'image' => 'home_page_background_fixed_image.jpg',
                'slug' => 'home_page_background_fixed_image',
            ],
            [
                'name' =>'home_page_background_project_slider_image',
                'image' => 'home_page_background_project_slider_image.png',
                'slug' => 'home_page_background_project_slider_image',
            ],
        ];
        foreach ($image as $table) {
            HomeImage::create($table);
        }
    }
}
