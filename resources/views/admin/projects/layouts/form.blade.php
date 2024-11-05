

@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <form action="{{ (Route::currentRouteName() == 'admin.projects.edit') ? route('admin.projects.update', $project->id ) : route('admin.projects.store') }}" method="POST" class="text-center card">
            @if (Route::currentRouteName() == 'admin.projects.edit')
                @method('PUT')
            @endif
            @csrf
            <div class="row row-cols-2 g-2 text-white">
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="author"><h6 class="text-black mb-2">Author: </h6></label>
                        @if (Route::currentRouteName() == 'admin.projects.edit')
                            <input type="text" class="form-control p-2" id="author" name="author" placeholder="Enter pokemon author..." value="{{ old('author', $project->author) }}">
                        @elseif (Route::currentRouteName() == 'admin.projects.create')
                            <input type="text" class="form-control p-2" id="author" name="author" placeholder="Enter pokemon author..." value="{{ old('author') }}">
                        @endif
                    </div>
                    @error("author")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="title"><h6 class="text-black mb-2">Title: </h6></label>
                        @if (Route::currentRouteName() == 'admin.projects.edit')
                            <input type="text" class="form-control p-2" id="title" name="title" placeholder="Enter pokemon title..." value="{{ old('title', $project->title) }}">
                        @elseif (Route::currentRouteName() == 'admin.projects.create')
                            <input type="text" class="form-control p-2" id="title" name="title" placeholder="Enter pokemon title..." value="{{ old('title') }}">
                        @endif
                    </div>
                    @error("title")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col flex-column-center my-2">
                    <div class="form-group">
                        <label for="description"><h6 class="text-black mb-2">Description: </h6></label>
                        @if (Route::currentRouteName() == 'admin.projects.edit')
                            <input type="text" class="form-control p-2" id="description" name="description" placeholder="Enter pokemon description..." value="{{ old('description', $project->description) }}">
                        @elseif (Route::currentRouteName() == 'admin.projects.create')
                            <input type="text" class="form-control p-2" id="description" name="description" placeholder="Enter pokemon description..." value="{{ old('description') }}">
                        @endif
                    </div>
                    @error("description")
                    <div class="alert alert-yellow">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="flex-center my-3">
                <button type="submit" class="btn btn-warning me-2">
                    @if (Route::currentRouteName() == 'admin.projects.edit')
                    <span>Edit</span>
                    <i class="fas fa-pencil ms-2"></i>
                    @elseif (Route::currentRouteName() == 'admin.projects.create')
                    <span>Create new project</span>
                    <i class="fas fa-plus ms-2"></i>
                    @endif
                </button>
                <button type="reset" class="btn btn-secondary me-2">
                    Reset fields
                    <i class="fas fa-undo ms-2"></i>
                </button>
            </div>
        </form>
    </div>
</main>
@endsection

