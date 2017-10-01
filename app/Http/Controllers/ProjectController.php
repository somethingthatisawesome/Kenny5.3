<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Project_category;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index()
    {
        $categories = Project_category::all();
        foreach($categories as $category)
        {
            $projects = Project::where('category','=',$category->id)->get();
            $category->projects= $projects;
        }
        return view('project.index',['projectCategories'=>$categories]);
    }
    public function detail($id)
    {
        $project = Project::where('id','=',$id)->first();
        return view('project.detail',['project'=>$project]);
    }
}
