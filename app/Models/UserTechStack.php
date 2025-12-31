<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTechStack extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function techStack()
    {
        return $this->belongsTo(TechStack::class);
    }
}
