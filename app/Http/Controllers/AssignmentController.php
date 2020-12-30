<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use App\Tag;

class AssignmentController extends Controller
{

    public function index()
    {
        return view(
            'assignment.index', ['assignments' => Assignment::all()]
        );
    }

    public function create()
    {
        return view(
            'assignment.create', ['tags' => Tag::all()]
        );
    }

    public function store(Request $request)
    {
        $newAssignment = new Assignment($this->validateAssignment());
        $newAssignment->save();
        $newAssignment->tags()->attach($request->get('tags'));
        return redirect(route('home'));
    }

    private function validateAssignment() : array
    {
        return \request()->validate([
            'body' => 'required',
            'due_dt' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
