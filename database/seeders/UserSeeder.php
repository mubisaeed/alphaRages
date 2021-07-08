<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'first_name' => 'mubeen',
            'last_name' => 'saeed',
            'email' => 'mubeen@gmail.com',
            'country' => 'Pakistan',
            'registration_number' => '123456789',
            'address1' => 'abc1',
            'address2' => 'abc2',
            'phone' => '0304-2396579',
            'website' => 'abc.com',
            'password' => bcrypt('password'),
        ]);
    }
}
