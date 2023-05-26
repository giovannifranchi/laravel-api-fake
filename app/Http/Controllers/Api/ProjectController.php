<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $data = Project::all();

        return response()->json($data);
    }

    public function show(string $slug){
        $project = Project::where('slug', $slug)->first();

        if($project){
            return response()->json($project, 200);
        }else {
            return response()->json(['error'=>'file not found'], 404);
        }
    }
}
