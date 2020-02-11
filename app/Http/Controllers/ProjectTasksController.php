<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;
class ProjectTasksController extends Controller
{
    //

    public  function  update(Task $task){

        $task->update([
            'completed'=> request()->has('completed')
        ]);


        return  back();
    }

    public  function store(Project $project){

        request()->validate([
           'newtask'=> 'required|min:4'
        ]);


$project->addtask(request('newtask'));
//        Task::create([
//            'project_id'=> $project->id,
//            'description'=> request('newtask')
//        ]);
        return  back();


    }
}
