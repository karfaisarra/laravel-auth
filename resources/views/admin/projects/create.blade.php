@extends('layouts.admin')

@section('content')

<h1>Add a new Project</h1>
<form action="{{route('admin.projects.store')}} " method="post">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="add title" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">must be unique, max 100 charecters</small>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>

</form>

@endsection