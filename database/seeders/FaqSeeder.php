<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faq = [
            [
                'sub_project_id'=> 1,
                'question' =>'Non consectetur a erat nam at lectus urna duis?',
                'answer' => ' Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',   
            ],

            [
                'sub_project_id'=> 1,
                'question' =>'Non consectetur a erat nam at lectus urna duis?',
                'answer' => ' Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',   
            ],
            [
                'sub_project_id'=> 2,
                'question' =>'Non consectetur a erat nam at lectus urna duis?',
                'answer' => ' Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',   
            ],
            [
                'sub_project_id'=> 2,
                'question' =>'Non consectetur a erat nam at lectus urna duis?',
                'answer' => ' Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',   
            ],
        ];

        foreach ($faq as $item) {
            Faq::create($item);
        }

    }
}
