<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    public function projectTechStacks()
    {
        return $this->hasMany(ProjectTechStack::class);
    }

    public function userTechStacks()
    {
        return $this->hasMany(UserTechStack::class);
    }
}
