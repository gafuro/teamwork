<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class ProjectsController extends Controller
{
    public function show(Project $project)
    {
        $page = $project->title . ': ' . $project->description . ' ; user:' . $project->author->name;
        return $page;
    }
}
