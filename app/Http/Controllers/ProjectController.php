<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with('user')->withCount('themes')->get();


        return Inertia::render('Projects/index', [
            'projects' => $projects
        ]);
    }

    public function show(int $id) {
        $project = Project::where('id', $id)->with('themes')->first();

        return Inertia::render('Projects/show', [
            'project' => $project
        ]);
    }
}
