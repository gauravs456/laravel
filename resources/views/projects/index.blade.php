@extends('/projects/layout')
@section('heading')
    <h1>Projects</h1>
@endsection

@section('content')
    <ul>
    @foreach($project as $row)
        <li>
            <a style="font-size: 30px"  href="/projects/{{$row->id}}">{{$row->title}} </a>
        </li>
    @endforeach
    </ul>
    @endsection
