@extends('layouts.admin')

@section('content')

<h1>Edit the Project</h1>
@if($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('admin.projects.update', $project->slug)}} " method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="add title" aria-describedby="titleHelper" value="{{old('title', $project->title)}}">
        <small id="titleHelper" class="text-muted">must be unique, max 100 charecters</small>
    </div>


    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{old('description', $project->description)}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection