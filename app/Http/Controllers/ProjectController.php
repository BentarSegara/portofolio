<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\TypeProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_projects = TypeProject::all();
        $projects = Project::with([
            'projectImages' => function ($query) {
                $query->where('is_primary', true);
            },
            'projectTechStacks' => function ($query) {
                $query->with('techStack');
            },
            'projectTypes' => function ($query) {
                $query->with('typeProject');
            }
        ])->get();

        return view('project.index', compact('projects', 'type_projects'));
    }

    public function show($id)
    {
        $projects = Project::with([
            'projectImages',
            'projectTechStacks' => function ($query) {
                $query->with('techStack');
            },
        ])->where('id', $id)->first();

        $prev_project = Project::select('id', 'name')->where('id', '<', $id)->first();
        $next_project = Project::select('id', 'name')->where('id', '>', $id)->first();

        $project_images = collect($projects->projectImages)->toArray();
        $bannerImages = array_filter($project_images, function ($image) {
            return $image['is_primary'] == true;
        })[0];
        return view('project.show', compact('projects', 'project_images', 'bannerImages', 'prev_project', 'next_project'));
    }
}
