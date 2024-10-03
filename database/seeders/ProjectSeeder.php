<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project as Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($k=0; $k<10; $k++) {
            $new_project = new Project();
            $new_project->name = $faker->word();
            $new_project->date_of_upload = $faker->date();
            $new_project->stack = implode(' - ', $faker->randomElements(['HTML', 'CSS', 'JS', 'EJS', 'VUE', 'VITE', 'PHP'], 3));
            $new_project->preview = $faker->imageUrl(400, 300);
            $new_project->description = $faker->sentence(30);

            $new_project->save();
        }
    }
}
