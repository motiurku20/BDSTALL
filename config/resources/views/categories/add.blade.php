@extends('layouts.app-dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5 mx-auto" style="width: 500px;">
                <div class="card-body">
                    <h3>Add New Category</h3>

                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Category Name">
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">------- Select Status ------</option>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">Save Category</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection