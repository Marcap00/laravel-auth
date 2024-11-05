@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $project->author }} </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"> {{ $project->title }} </h6>
                        <p class="card-text"> {{ $project->description }} </p>
                        <a href="{{ route('admin.projects.index') }}" title="Back"><button class="btn btn-warning">Back <i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
                        <a href="{{ route('admin.projects.edit', $project) }}" title="Edit Project"><button class="btn btn-primary">Edit <i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
