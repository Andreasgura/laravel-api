@extends('layouts.app')
@section('content')
<section class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>I tuoi progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Screenshots</th>
                <th scope="col">Link Github</th>
                <th scope="col">Link Website</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project )
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ Str::limit($project->description, 20) }}</td>
                <td>{{ $project->screenshot }}</td>
                <td>{{ $project->link_github }}</td>
                <td>{{ $project->link_website }}</td> 

                <td> <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success">Show</a>
                <td>
                    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>
@endsection