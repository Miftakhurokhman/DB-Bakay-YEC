<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(3)->create();

        \App\Models\Fasilitator::factory(10)->create();

        \App\Models\Kelas::factory(10)->create();

        \App\Models\Activity::factory(30)->create();

        \App\Models\SubActivity::factory(50)->create();

        \App\Models\ClassFasilitator::factory(25)->create();

        \App\Models\UserClass::factory(20)->create();

        \App\Models\UserProgressActivity::factory(40)->create();




        \App\Models\SubActivityType::factory()->create([
            'typeName' => 'Mengerjakan Tugas',
        ]);
        \App\Models\SubActivityType::factory()->create([
            'typeName' => 'Menonton Video',
        ]);
        \App\Models\SubActivityType::factory()->create([
            'typeName' => 'Membaca E-Book',
        ]);



        \App\Models\ClassCategory::factory()->create([
            'categoryName' => 'Mobile',
        ]);
        \App\Models\ClassCategory::factory()->create([
            'categoryName' => 'Cloud Computing',
        ]);
        \App\Models\ClassCategory::factory()->create([
            'categoryName' => 'Machine Learning',
        ]);


    }
}
