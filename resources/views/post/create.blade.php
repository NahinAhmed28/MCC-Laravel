@include('layouts.app')
@extends('sidebarTemplate')

@section('content')

    <x-header componentName="Employee" />
    <h3>Employee add  -> form fill up</h3>
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="Name">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"  required>
            </div>


        </div>


        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="Name">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Title"  required>
            </div>


        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="Name">Caption</label>
                <input type="text" class="form-control" id="caption" name="caption" placeholder="Enter Title"  required>
            </div>


        </div>


        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <br> <br>


@endsection
