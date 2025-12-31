<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use App\Models\UserTechStack;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $userInfo = User::with([
            'userTechStacks' => function ($query) {
                $query->with('techStack');
            },
        ])->first();

        $userProjects = Project::with([
            'projectImages' => function ($query) {
                $query->where('is_primary', true);
            },
            'projectTechStacks' => function ($query) {
                $query->with('techStack');
            },
        ])->where('user_id', $userInfo->id)->where('is_choiced', true)->get();
        return view('welcome', compact('userInfo', 'userProjects'));
    }
}
