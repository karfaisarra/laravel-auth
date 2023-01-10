@extends('layouts.admin')
@section('content')
<h2>{{$project->title}}</h2>
<h5>{{project->slug}}</h5>
<p>{{$project->description}}</p>


@endsection