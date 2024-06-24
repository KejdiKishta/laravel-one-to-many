@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h1>Edit: {{ $project->title }}</h1>

        <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="form-group py-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group py-3">
                <label for="owner">Owner</label>
                <input type="text" class="form-control @error('owner') is-invalid @enderror" id="owner"
                    name="owner" value="{{ old('owner', $project->owner) }}">
                @error('owner')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group py-3">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="4">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.projects.index') }}"><button class="btn btn-outline-secondary">Return</button></a>
        </form>
    </div>
@endsection
