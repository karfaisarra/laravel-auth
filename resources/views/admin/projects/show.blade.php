@extends('layouts.admin')
@section('content')

<h2>{{$project->title}}</h2>
<h5 class="pt-3">{{$project->slug}}</h5>
<p class="w-50 pt-3">{{$project->description}}</p>


@endsection