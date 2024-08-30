<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        $data = json_decode(file_get_contents(storage_path('data/home.json')), true);
        return view('home', compact('data'));
    }

    public function workExperiences()
    {
        $data = json_decode(file_get_contents(storage_path('data/work_experiences.json')), true);
        return view('work_experiences', compact('data'));
    }

    public function projects()
    {
        $data = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        return view('projects', compact('data'));
    }

    public function projectDetails($id)
    {
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        $project = $projects[$id] ?? null;

        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('project_details', compact('project'));
    }
}
