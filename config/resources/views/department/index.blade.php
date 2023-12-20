<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>
@extends('layouts.app-dashboard')

@section('content')

<div class="container">
    <h3 class="py-5">Department List</h3>

    <div>
        <p class="">
            <a href="{{ url('departments/create') }}">Add Department</a>
        </p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $key => $department)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->status }}</td>
                    <td>
                        <a href="{{ url('department/'.$department->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ url('department/'.$department->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection