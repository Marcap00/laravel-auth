<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $newProject = new Project();
            $newProject->author = $faker->name() . ' ' . $faker->lastName();
            $newProject->title = $faker->sentence(4);
            $newProject->description = $faker->realText(100);
            $newProject->save();
        }
    }
}