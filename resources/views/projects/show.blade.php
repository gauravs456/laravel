@extends('/projects/layout')
@section('heading')
    <h1>Your Profile</h1>
    @endsection

<style>
   .to {
        text-decoration:line-through;
    }
</style>


@section('content')
    <div class="card">

        <div class="card-body">
            <h1  class="card-title">{{$project->title}}</h1>
            <h2>{{$project->description}}</h2>

            @if($project->tasks->count())
<div>

                @foreach($project->tasks as$task)

        <div class="form-check" >
            <form method="post" action="/tasks/{{$task->id}}">
                {{csrf_field()}}
                @method('PATCH')


                <div class="checkbox" style="font-size: 15px" >
                    <label><input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked && disabled' : ''}}>  {{$task->description}}</label>
                </div>
            </form>
        </div>
                @endforeach

</div>
                @endif
            <a href="/projects/{{$project->id}}/edit" style="margin-top:1%; font-size: 12px" class="btn btn-primary" >update your Profile</a>





        </div>

        <form method="post" action="/projects/{{$project->id}}/tasks">
            @csrf
            <div class="container">
                <label >New Task</label>
                <input type="text" name="newtask" class=" form-control form-control-lg"  placeholder="Enter your task"  value="{{old('newtask')}}">
            </div>

            @include('projects/error')



            <div style="margin-top: 3%" class="container">
               <button style="font-size: 12px "  class="btn btn-primary" type="submit">Add New Task </button>

            </div>


        </form>

        </div>


    @endsection
