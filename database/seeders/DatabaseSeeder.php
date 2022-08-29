<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Event::factory()->create([
            'title' => 'Cocina creativa. Del microondas al horno',
            'favorite' => true,
            'date' => '2024-08-12',
        ]);
        Event::factory()->create([
            'title' => 'Escanciador de sidra',
            'favorite' => true,
            'date' => '2022-11-12',
        ]);
        Event::factory()->create([
            'title' => 'Instalación de Windows',
            'favorite' => true,
            'date' => '2023-08-12',
        ]);
        Event::factory()->create([
            'title' => 'Creación de guiones de palículas',
            'favorite' => true,
            'date' => '2025-08-12',
        ]);

        Event::factory()->create([
            'title' => 'Creación de guiones para juegos',
            'favorite' => false,
            'date' => '2025-08-12',
        ]);

        Event::factory()->create([
            'title' => 'Iniciación a la programación',
            'favorite' => false,
            'date' => '2025-08-12',
        ]);

        Event::factory()->create([
            'title' => 'Autoayuda. Superación de estres',
            'favorite' => false,
            'date' => '2025-08-12',
        ]);

        Event::factory(5)->create([
            'favorite' => true,
        ]);
        Event::factory(15)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);
        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@user1.com',
        ]);
        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@user2.com',
        ]);
    }
}
