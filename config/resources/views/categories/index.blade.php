@extends('layouts.app-dashboard')

@section('content')

<div class="container">
    <h3 class="py-5">Categories</h3>

    <div>
        <p class="">
            <a href="{{ route('category.add') }}">Add Category</a>
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
            @foreach ($categories as $category => $item)
                <tr>
                    <td>{{ ++$category }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('category.delete', $item->id) }}" method="post" class="d-inline">
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