<?php

namespace Database\Seeders;

use App\Models\Homeslider;
use Illuminate\Database\Seeder;

class HomesliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $homeslider = [
           

            [
                'status' => 1,
            ],
           
        ];
        foreach ($homeslider as $table) {
            Homeslider::create($table);
        }
    }
}
