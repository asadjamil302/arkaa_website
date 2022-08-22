<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
           

            [
                'name' =>'Rana Asad',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => Carbon::now()->today(),
                'password' => Hash::make('12345678')
            ],
           
        ];
        foreach ($user as $table) {
            User::create($table);
        }
    }
}
