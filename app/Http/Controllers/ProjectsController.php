<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class ProjectsController extends Controller
{
    public function show($projectId)
    {

        $project = Project::where('id', $projectId)->firstOrFail();

        $page = $project->title. ': '.$project->description;

        return $page;
    }
}
