@extends('layouts.app')
@section('style')
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
        .btn {
            margin-right: 5px;
        }
        .table thead {
            background-color: #343a40;
            color: #fff;
        }
        .card-header {
            background-color: #007bff;
        }
        .pagination {
            margin-top: 20px;
        }
    </style>
@endsection
@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Task Management</h5>
                        <a href="{{ route('tasks.create') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-plus-circle"></i> Create Task
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>
                                            <span class="badge {{ $task->status == 'completed' ? 'bg-success' : 'bg-warning' }}">
                                                {{ ucfirst($task->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $tasks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection



