@extends('layouts.app')
@section('content')
<section class="container">

    <h1>{{ $project->title }}</h1>
    <div class="mb-3 h2" >
       Linguaggio utilizzato: {{$project->type? $project->type->name : 'nessun linguaggio presente'}} 
    </div>
    <p>{{ $project->description }}</p>
    <div >
        <img class="w-75" src="{{asset('storage/' . $project->screenshot)}}" alt="">
    </div>    
    <a href="{{ $project->link_github }}">Vedi su GitHub</a>
    <br>
    <a href="{{ $project->link_website }}">Vai al sito</a>
    <div>
        <a class="btn btn-primary" href="{{route('admin.projects.index')}}">Torna alla lista</a>
    </div>
</section>
@endsection