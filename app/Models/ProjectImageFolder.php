<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImageFolder extends Model
{
    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
