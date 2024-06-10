<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'PHP',
            'JavaScript',
            'css',
            'html'];
        foreach ($languages as $language) {
            $new_type = new Type();
            $new_type->name = $language;
            $new_type->slug = Type::generateSlug(Type::class, $new_type->name);
            $new_type->save();
        }
    }
}
