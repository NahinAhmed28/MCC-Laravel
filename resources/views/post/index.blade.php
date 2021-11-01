@include('layouts.app')
@extends('sidebarTemplate')

@section('content')
<div class="row">
    <div class="col-md-6">
        <x-header componentName="User" />
    </div>

    <div class="col-md-6">
        <a class="btn btn-primary" href="{{route('posts.create')}}" role="button">Add New Post</a>
    </div>
    <h3> Post body</h3>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Caption</th>
          </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
        <tr>

            <td>{{$post->id}}</td>

        <td> {{$post->title}}</td>
        <td> {{$post->description}}</td>
        <td> {{$post->caption}}</td>

            </tr>

        @endforeach


{{-------}}

        </tbody>

      </table>

    </div>

@endsection
