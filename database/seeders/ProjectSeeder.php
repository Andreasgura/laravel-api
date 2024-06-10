<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\Admin\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $table->string('screenshot',50)->nullable();
        // $table->string('link_github',50);
        // $table->string('link_site',50);

        for ($i = 0; $i < 10; $i++) {
            $new_project=new Project();
            $new_project->title=$faker->word();
            $new_project->slug= Project::generateSlug(Project::class, $new_project->title);
            $new_project->description =$faker->paragraph();
            $new_project->screenshot = $faker->url;
            $new_project->link_github = $faker->url;
            $new_project->link_website = $faker->url;
            $new_project->save();
    
        }       
    }
}
