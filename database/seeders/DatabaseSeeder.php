<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret')
        ]);
         /* Colegios  */
         DB::table('colegios')->insert([
            'nombre' => 'Colegio 1',
            'direccion' => 'Direccion 1',
            'telefono' => '123456789',
            'email' => 'vanacio@gmial.com',
            'foto' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eldiario.es%2Fsociedad%2Fcolegios-privados-publicos-escuelas-c'
        ]);

        DB::table('colegios')->insert([
            'nombre' => 'Colegio 2',
            'direccion' => 'Direccion 2',
            'telefono' => '123456789',
            'email' => 'salle@gmail.com',
            'foto' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eldiario.es%2Fsociedad%2Fcolegios-privados-publicos-escuelas-c'
        ]);

        DB::table('colegios')->insert([
            'nombre' => 'Colegio 3',
            'direccion' => 'Direccion 3',
            'telefono' => '123456789',
            'email' => 'walverto@gmail.com',
            'foto' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eldiario.es%2Fsociedad%2Fcolegios-privados-publicos-escuelas-c'
        ]);


        /* Aulas  */
        DB::table('aulas')->insert([
            'nombre' => 'Aula 1',
            'capacidad' => 30,
            'foto' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eldiario.es%2Fsociedad%2Fcolegios-privados-publicos-escuelas-c',
            'colegio_id' => 1,
        ]);

        DB::table('aulas')->insert([
            'nombre' => 'Aula 2',
            'capacidad' => 30,
            'foto' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eldiario.es%2Fsociedad%2Fcolegios-privados-publicos-escuelas-c',
            'colegio_id' => 1,
        ]);

        DB::table('aulas')->insert([
            'nombre' => 'Aula 3',
            'capacidad' => 30,
            'foto' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eldiario.es%2Fsociedad%2Fcolegios-privados-publicos-escuelas-c',
            'colegio_id' => 2
        ]);
    }
}
