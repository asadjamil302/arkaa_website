<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $setting = [

            //header section nav-bar setting
            [
                'key' =>'navbar_home',
                'value' => 'Home',
                'slug' => Str::slug('navbar_home'),
            ],
            [
                'key' =>'navbar_about',
                'value' => 'About Us',
                'slug' => Str::slug('navbar_about'),
            ],
            [
                'key' =>'navbar_project',
                'value' => 'Projects',
                'slug' => Str::slug('navbar_project'),
            ],
            [
                'key' =>'navbar_contact_us',
                'value' => 'Contact',
                'slug' => Str::slug('navbar_contact_us'),
            ],
            [
                'key' =>'navbar_mobile_number',
                'value' => '(+88) 1990 6886',
                'slug' => Str::slug('navbar_mobile_number'),
            ],
            //end header section nav-bar setting

            //section (Why Choose Us Section)
            [
                'key' =>'why_choose_us_title_heading',
                'value' => 'Why Choose Us',
                'slug' => str::slug('why_choose_us_title_heading'),
            ],
            [
                'key' =>'why_choose_us_desciption',
                'value' => 'We provide full service at every step.',
                'slug' => str::slug('why_choose_us_desciption'),
            ],
            //end section (Why Choose Us Section)

            //section (Our Testimonial)
            [
                'key' =>'our_testimonial_title_heading',
                'value' => 'Our Testimonials',
                'slug' => str::slug('our_testimonial_title_heading'),
            ],
            [
                'key' =>'our_testimonial_desciption',
                'value' => 'What our clients says about us',
                'slug' => str::slug('our_testimonial_desciption'),
            ],
            //end section (Our Testimonial)

            // Footer Section

            [
                'key' =>'copy_right',
                'value' => 'Copyright © 2022 arkaaconsultants. All Right Reserved.',
                'slug' => str::slug('copy_right'),

            ],
            [
                'key' =>'footer_address_location',
                'value' => 'Main Gulberg Lahore Pakistan',
                'slug' => str::slug('footer_address_location'),

            ],
            [
                'key' =>'footer_phone_number',
                'value' => '0311-1127522',
                'slug' => str::slug('footer_phone_number'),

            ],
            [
                'key' =>'footer_email',
                'value' => 'info@arkaaconsultants.com',
                'slug' => str::slug('footer_email'),

            ],
            [
                'key' =>'social_facebook_icon',
                'value' => 'https://web.facebook.com/ArkaaConsultants?_rdc=1&_rdr',
                'slug' => str::slug('social_facebook_icon'),

            ],
            [
                'key' =>'social_twitter_icon',
                'value' => 'https://twitter.com/Arkaaconsultant',
                'slug' => str::slug('social_twitter_icon'),

            ],
            [
                'key' =>'social_instagram_icon',
                'value' => 'https://www.instagram.com/arkaaconsultants/',
                'slug' => str::slug('social_instagram_icon'),

            ],
            [
                'key' =>'social_linkedin_icon',
                'value' => 'https://www.linkedin.com/company/arkaaconsultants',
                'slug' => str::slug('social_linkedin_icon'),

            ],
            [
                'key' =>'social_youtube_icon',
                'value' => 'https://www.youtube.com/channel/UCUmzpSE1W_vj7Uj1cgmxxwQ',
                'slug' => str::slug('social_youtube_icon'),

            ],
            
            //contact page
            [
                'key' =>'google_map_location',
                'value' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13605.152033052347!2d74.3450255!3d31.5162488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9cf14fee786bfdd8!2sArkaa%20Consultants!5e0!3m2!1sen!2s!4v1660719370388!5m2!1sen!2s',
                'slug' => str::slug('google_map_location'),
            ],
            [
                'key' =>'contact_page_heading_1',
                'value' => 'We are always eager to hear from you!',
                'slug' => str::slug('contact_page_heading_1'),
            ],
            [
                'key' =>'contact_page_paragraph',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'slug' => str::slug('contact_page_paragraph'),
            ],
            [
                'key' =>'contact_page_address',
                'value' => '329 Queensberry Street, North
                Melbourne VIC 3051, Australia.',
                'slug' => str::slug('contact_page_address'),
            ],
            [
                'key' =>'contact_page_mobile_number',
                'value' => '0311-1127522',
                'slug' => str::slug('contact_page_mobile_number'),
            ],
            [
                'key' =>'contact_page_email',
                'value' => 'info@arkaaconsultants.com',
                'slug' => str::slug('contact_page_email'),
            ],
            [
                'key' =>'contact_page_monday_to_friday_time',
                'value' => '09:00 - 20:00',
                'slug' => str::slug('contact_page_monday_to_friday_time'),
            ],
            [
                'key' =>'contact_page_saturday_to_sunday_time',
                'value' => '10:30 - 22:00',
                'slug' => str::slug('contact_page_saturday_to_sunday_time'),
            ],
            
        ];
                    foreach ($setting as $table) {
                        Setting::create($table);
                    }
    }
}
