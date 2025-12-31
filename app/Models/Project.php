<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectTechStacks()
    {
        return $this->hasMany(ProjectTechStack::class);
    }

    public function projectTypes()
    {
        return $this->hasMany(ProjectType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
