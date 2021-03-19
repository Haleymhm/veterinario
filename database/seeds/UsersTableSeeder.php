<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
//use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'uid' =>Uuid::uuid4(),
            'veterinary_uid' => '0',
            'name' => 'Root de Sistema',
            'email' => 'root@localhost.test',
            'tipousuario_id' => '0',
            'password' => Hash::make('root123'),
        ]);
    }
}