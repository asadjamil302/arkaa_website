<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $about = [
           

            //About us page Heading setting
            [
                'key' =>'about_heading',
                'value' => 'Our Mission Is To ktechz',
                'slug' => Str::slug('about_heading'),
            ],
            //About us page Excrept (short detail) setting
            [
                'key' =>'about_short_detail',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'slug' => Str::slug('about_short_detail'),
            ],
            //About us page Description (detail) setting
            [
                'key' =>'about_description',
                'value' => '<div class="title" style="margin: 0px; padding: 0px; text-align: center; font-size: 38px; color: rgb(97, 97, 97); font-style: italic; font-weight: 800; font-family: &quot;Josefin Sans&quot;, sans-serif;"><h3 style="margin-right: 0px; margin-bottom: 0.5rem; margin-left: 0px; padding: 0px 0px 15px; font-family: &quot;Josefin Sans&quot;, sans-serif; font-weight: 500; color: rgb(0, 0, 0); font-size: 30px; text-align: left;">About ARKAA CONSULTANTS</h3></div><p style="margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 24px; color: rgb(51, 51, 51); text-align: justify; font-family: &quot;Josefin Sans&quot;, sans-serif;"><span style="margin: 0px; padding: 0px; font-weight: bolder;"><i style="margin: 0px; padding: 0px;">Arkaa Consultants</i></span>&nbsp;is a real estate firm looking forward to embark a new milestone in the modernized world of conducting real estate business. We manage a diverse portfolio of properties including commercial, residential and agricultural land throughout the country. Our services comprise of property management, buying and selling of land and real estate investments. Arkaa Consultants is truly passionate to augment their expertise and reputation they acquired through conventional real estate experience in rather more digitally revolutionized yet comprehensive ways.</p><div class="title" style="margin: 0px; padding: 0px; text-align: center; font-size: 38px; color: rgb(97, 97, 97); font-style: italic; font-weight: 800; font-family: &quot;Josefin Sans&quot;, sans-serif;"><h6 style="margin-right: 0px; margin-bottom: 0.5rem; margin-left: 0px; padding: 0px; font-family: &quot;Josefin Sans&quot;, sans-serif; font-weight: 500; color: rgb(0, 0, 0); font-size: 20px; text-align: left;">HOW IT ALL STARTED</h6></div><p style="margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; font-size: 16px; line-height: 24px; color: rgb(51, 51, 51); text-align: justify; font-family: &quot;Josefin Sans&quot;, sans-serif;">Starting off in 1976,&nbsp;<span style="margin: 0px; padding: 0px; font-weight: bolder;">Abdul Latif Mian</span>&nbsp;made his first entrepreneurial venture in Saudi Arabia with the name of&nbsp;<i style="margin: 0px; padding: 0px;">"</i><span style="margin: 0px; padding: 0px; font-weight: bolder;">&nbsp;Rashid Sweets and Bakers</span>&nbsp;<i style="margin: 0px; padding: 0px;">"</i>, gained a trusted name in the market. Since then,&nbsp;<i style="margin: 0px; padding: 0px;">Abdul Latif Mian &amp; Sons</i>&nbsp;have spent many years in developing and exploring new speculations as a result of their curiosity which led them to try their expertise in varied dimensions as the world is vast and sky is the limit for those who dare to explore the world. We are explorers and we know how to get the best out of everything and make it happen as it is reflected in our history over the years since we started. Moreover, the deep knowledge we gained as business executives made us understand the market not only in Pakistan but globally. We tried our wits and guts in a very diverse array of businesses. And over the span of years our portfolio expanded with successful endeavors.</p>',
                'slug' => Str::slug('about_description'),
            ],

        ];
        foreach ($about as $table) {
            About::create($table);
        }
    }
}
