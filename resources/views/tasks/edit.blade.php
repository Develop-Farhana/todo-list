@extends('layouts.app')
@section('style')
<style>
        .card {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        Edit Task
                        <a href="#" class="btn btn-secondary btn-sm" onclick="history.back();">Close</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title" style="color: black;">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" style="color: black;" required>
                            </div>
                            <div class="form-group">
                                <label for="description" style="color: black;">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control" style="color: black;">{{ $task->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status" style="color: black;">Status</label>
                                <select name="status" id="status" class="form-control" style="color: black;" required>
                                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

