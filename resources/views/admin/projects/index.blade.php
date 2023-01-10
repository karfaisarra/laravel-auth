@extends('layouts.admin')
@section('content')

<div class="d-flex justify-content-between align-items-center my-4">
    <h1>Projects</h1>
    <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Add New Project</a>
</div>
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <i class="fas fa-eye fa-sm fa-fw"></i>
                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                    <i class="fas fa-trash fa-sm fa-fw"></i>
                </td>
            </tr>
            @empty
            <tr>
                <td>No Projects Yet!</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

@endsection