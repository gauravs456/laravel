<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected  $fillable=['title','description'];

    public  function  tasks(){

        return $this->hasMany(Task::class);
    }

    public  function addtask($newtask){
$description=$newtask;
        $this->tasks()->create(compact('description'));

    }
}
