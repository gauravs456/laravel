<?php

namespace App\Http\Controllers;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public  function index(){
        $project=Project::all();
        return view('projects/index',compact('project'));
    }

    public function create(){
        return view('projects/create');
    }
   public  function show(Project $project){

//        $project=Project::findorFail($id);

//        return $project;
        return view('projects/show',compact('project'));

    }
    public  function  edit($id)
    {

        $project=Project::findorFail($id);

        return view('projects/edit',compact('project'));

    }

    public  function  update($id){
        $project=Project::findorFail($id);
        $project->update(request(['title','description']));
//        $project->title=request('title');
//        $project->description=request('description');
//        $project->save();

       return redirect('/projects/showdata');

    }
    public function  destroy($id){

     Task::where('project_id',$id)->delete();
        Project::findorFail($id)->delete();
        return redirect('/projects/showdata');


}
    public  function  store(){
       $validated= request()->validate([
            'title'=> 'required|min:5|max:10',
            'description' => 'required|min:4'
        ]);
        Project::create($validated);
//        Project::create(request(['title','description']));
//
//        Project::create([
//            'title'=> request('title'),
//            'description' => request('description')
//        ]);
//
//        $project=new Project();
//        $project->title=request('title');
//        $project->description=request('description');
//        $project->save();


        return redirect('/projects/showdata');
    }
}
