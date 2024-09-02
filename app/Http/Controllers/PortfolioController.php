<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function work()
    {
        $workExperiences = json_decode(File::get(storage_path('data/work.json')), true);
        return view('work', ['workExperiences' => $workExperiences]);
    }

    public function projects()
    {
        $projects = json_decode(File::get(storage_path('data/projects.json')), true);
        return view('projects', ['projects' => $projects]);
    }

    public function projectDetails($id)
    {
        $projects = json_decode(File::get(storage_path('data/projects.json')), true);
        $project = collect($projects)->firstWhere('id', $id);
        return view('project_details', ['project' => $project]);
    }
}
