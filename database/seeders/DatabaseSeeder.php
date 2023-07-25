<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        $dataUser = [
            [
                'nama' => 'User Example',
                'nisn' => '124',
                'password' => bcrypt('12345678'),
                'level' => 'user',
            ],
            [
                'nama' => 'Admin Example',
                'nisn' => '123',
                'password' => bcrypt('12345678'),
                'level' => 'admin',
            ],
        ];
        foreach ($dataUser as $key => $val){
            User::create($val);
        }
    }
    
}
