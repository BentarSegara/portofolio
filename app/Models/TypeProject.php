<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProject extends Model
{
    public function projectTypes()
    {
        return $this->hasMany(ProjectType::class);
    }
}
