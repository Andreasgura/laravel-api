@extends('layouts.app')
@section('content')

<section class="container">

<form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
    <div class="mb-3">
      <label for="title" class="form-label">Inserisci un titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" aria-describedby="titleHelp" name="title" value="{{ old(' title') }}">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Inserisci una descrizione</label>
      <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="screenshot" class="form-label">Inserisci un screenshot</label>
      <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="uploadImage" name="image" value="{{ old('image') }}" maxlength="255">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="link_github" class="form-label">Inserisci un link github</label>
      <input type="text" class="form-control @error('link_github') is-invalid @enderror " id="link_github" aria-describedby="link_githubHelp" name="link_github" value="{{ old('link_github') }}">
      @error('link_github')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="link_website" class="form-label @error('link_website') is-invalid @enderror" id="link_website" aria-describedby="link_websiteHelp">Inserisci un link website</label>
      <input type="text" class="form-control" id="link_website" aria-describedby="link_websiteHelp" name="link_website" value="{{ old('link_website') }}">
      @error('link_website')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      Seleziona una o più tecnologie
      <label for="type_id" class="form-label">Seleziona un tipo</label>
      <select class="form-select" aria-label="Default select example" name="type_id">
        @foreach ($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <div class="form-check">
        @foreach ($technologies as $technology)
        <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" id="flexCheckDefault" name="technologies[]">
        <label class="form-check-label" for="flexCheckDefault">
          {{ $technology->name }}
        </label>
      </div>
      @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
    <button type="reset" class="btn btn-secondary">Cancella</button>
  </form>



</section>
@endsection