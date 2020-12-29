<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use App\Tag;

class AssignmentController extends Controller
{

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

    private function validateAssignment()
    {
        return \request()->validate([
            'body' => 'required',
            'due_dt' => 'required'
        ]);
    }
}
