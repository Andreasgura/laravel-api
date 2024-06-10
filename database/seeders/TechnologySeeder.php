<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Laravel',
            'Vue js',
            'Bootstrap'
        ];
        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->slug = Technology::generateSlug(Technology::class, $new_technology->name);
            $new_technology->save();
        }
    }
}
