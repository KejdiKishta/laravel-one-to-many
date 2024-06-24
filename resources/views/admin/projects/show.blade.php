@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h1>{{ $project->title }}</h1>
        <p class="text-secondary">owner: {{ $project->owner }}</p>
        <hr class="my-3">
        <p>{{ $project->description }}</p>
    </div>
@endsection