<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente1 = Cliente::create([
            'nombre' => "Cristian",
            'email' => "cristian@gmail.com",
            'telefono' => "951456325",
            'pais' => "Perú",
            'fecha_nacimiento' => "1999-06-03",
            'genero' => "Masculino",
            'notas' => "Recomendado por Hugo Sanchez",
            'fecha_registro' => "2024-05-15",
            'ocupacion' => "Area de ventas",
        ]);
        $cliente2 = Cliente::create([
            'nombre' => "Mishell",
            'email' => "Mishell@gmail.com",
            'telefono' => "954785456",
            'pais' => "Argentina",
            'fecha_nacimiento' => "2005-06-03",
            'genero' => "Femenino",
            'notas' => "Recomendado por Andrea Gomez",
            'fecha_registro' => "2024-06-12",
            'ocupacion' => "Area de marketing",
        ]);
        $cliente3 = Cliente::create([
            'nombre' => "Carlos",
            'email' => "carlos@gmail.com",
            'telefono' => "912365456",
            'pais' => "Francia",
            'fecha_nacimiento' => "2002-10-13",
            'genero' => "Masculino",
            'notas' => "Recomendado por Freed Picaso",
            'fecha_registro' => "2024-08-11",
            'ocupacion' => "Area de diseño",
        ]);
        $cliente4 = Cliente::create([
            'nombre' => "Lorena",
            'email' => "lorena@gmail.com",
            'telefono' => "954126852",
            'pais' => "Alemania",
            'fecha_nacimiento' => "2003-11-13",
            'genero' => "Femenino",
            'notas' => "Recomendado por Austin Piñera",
            'fecha_registro' => "2024-08-11",
            'ocupacion' => "Area de desarrollo de software",
        ]);
        $cliente5 = Cliente::create([
            'nombre' => "Jimena",
            'email' => "jimena@gmail.com",
            'telefono' => "965485214",
            'pais' => "Francia",
            'fecha_nacimiento' => "2002-05-06",
            'genero' => "Femenino",
            'notas' => "Recomendado por Katerin Hamblert",
            'fecha_registro' => "2024-09-12",
            'ocupacion' => "Area de diseño",
        ]);
    }
}
