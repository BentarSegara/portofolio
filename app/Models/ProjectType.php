<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function typeProject()
    {
        return $this->belongsTo(TypeProject::class);
    }
}
