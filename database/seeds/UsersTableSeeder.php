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
            'name' => 'Root de Sistema',
            'email' => 'root@localhost.test',
            'tipousuario_id' => '0',
            'password' => Hash::make('root123'),
        ]);

        DB::table('users')->insert([
            'uid' =>Uuid::uuid4(),
            'name' => 'Administrador',
            'email' => 'admin@veterinario.test',
            'tipousuario_id' => '1',
            'password' => Hash::make('Admin123'),
        ]);
    }
}