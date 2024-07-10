@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task Details</div>

                    <div class="card-body">
                        <p><strong>Title:</strong> {{ $task->title }}</p>
                        <p><strong>Description:</strong> {{ $task->description }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($task->status) }}</p>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
