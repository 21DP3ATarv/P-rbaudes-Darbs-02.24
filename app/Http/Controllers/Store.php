<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Apps\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner' => 'required|url',
            'students_count' => 'required|integer'
        ]);

        $course = Course::create($validatedData);

        return response()->json($course, 201);
    }

    public function index()
    {
        $courses = Course::all();

        return response()->json($courses, 200);
    }
}
