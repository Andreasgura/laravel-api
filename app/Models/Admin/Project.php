<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'screenshot', 'link_github', 'link_website', 'type_id'];
    public static function generateSlug($className, $string)
    {
        $count = 1;
        $slug = Str::slug($string, '-');
        while ($className::where('slug', $slug)->first()) {
            $slug = Str::slug($string . '-' . $count, '-');
            $count++;
        }
        return $slug;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
