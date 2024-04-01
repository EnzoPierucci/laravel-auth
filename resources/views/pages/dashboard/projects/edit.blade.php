@extends('layouts.app')

@section('content')
    <main class="container py-3">

        <h1>Modifica Progetto</h1>
       
        <form action="{{route('dashboard.projects.update', $project->slug ) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" 
                    class="form-control
                        @error('title')
                            is-invalid
                        @enderror"
                    name="title"
                    id="title"
                    value="{{ old('title', $project->title) }}"
                    required
                />
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Content</label>
                <textarea
                    type="text" 
                    class="form-control"
                    name="content"
                    id="content"
                    rows="3">{{ old('content', $project->content) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>

        </form>
    </main>
@endsection