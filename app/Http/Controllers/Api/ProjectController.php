<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;

class ProjectController extends Controller
{
    public function index()

    {
        $projects = Project::with('technologies')->paginate(3);
        return response()->json([
            'status' => 'success',
            'message'=> 'Ok',
            'results'=> $projects
        ], 200);

    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->with('technologies')->first();
        if ($project) {
        return response()->json([
            'status'=> 'success',
            'message'=> 'Ok',
            'results'=> $project
        ], 200);

        }

        return response()->json([
            'status'=> 'error',
            'message'=> 'Project not found',
            'results'=> []
        ], 404);
    }

}
