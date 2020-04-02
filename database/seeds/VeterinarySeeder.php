<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class VeterinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veterinaries')->insert([
            'uid' =>Uuid::uuid4(),
            'name' => 'Clinica Veterinaria',
            'address' => 'Direcion del local',
            'telephone' => '',
            'movil' => '',
            'logo' => 'nologo.png',
            'email' => 'admin@veterinario.test',
        ]);
    }
}
