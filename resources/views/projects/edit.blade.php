@extends('/projects/layout')
@section('heading')
    <h1 id="ip">Dashboard</h1>
    @endsection
@section('content')
    <style>
        #ip{
            text-align: center;
        }
    </style>





    <form method="Post" action="/projects/{{$project->id}}" style="margin-bottom: 23px;">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <div class="form-group">
            <h2  class="card-title" >Title</h2>


            <input type="text" name="title"  class=" form-control form-control-lg" placeholder="Your title" value="{{$project->title}}">


        </div>
        <div class="form-group">
            <h2  class="card-title" >Description</h2>
            <textarea type="text" name="description"  rows="4" cols="50"  class=" form-control form-control-lg" id="exampleInputPassword" placeholder="Your Description" > {{$project->description}}</textarea>

        </div>

        <button  style="font-size: 12px " type="submit" class="btn btn-primary">Update</button> &nbsp;


    </form>


    <form method="Post" action="/projects/{{$project->id}}">
{{method_field('DELETE')}}
        {{csrf_field()}}
        <button  style="font-size: 12px "  type="submit" class="btn btn-primary">Delete</button> &nbsp;


    </form>










    @endsection
