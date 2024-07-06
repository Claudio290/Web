<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['rut' => '21545818-0','nombre' => 'Claudio','password'=>Hash::make('12345678'),'activo' =>true,'id_perfil'=>1,],
            ['rut' => '11222333-4','nombre' => 'Ejecutivo 1','password'=>Hash::make('87654321'),'activo' =>true,'id_perfil'=>2,],
        ]);
    }
}
