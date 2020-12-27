<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class AssignmentController extends Controller
{

    public function create()
    {
        return view(
            'assignment.create', ['tags'=> Tag::all()]
        );
    }

    public function store()
    {
    }
}
