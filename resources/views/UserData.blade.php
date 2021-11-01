@include('layouts.app')
@extends('sidebarTemplate')

@section('content')
  <x-header componentName="User" />

   
        <h3>current user list </h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password (encrypted)</th>
          </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <tr>
                <td scope="col">{{$user->id}}</td>
                <td scope="col">{{$user->name}}</td>
                <td scope="col">{{$user->email}}</td>
                <td scope="col">{{$user->password}}</td>
              </tr>
        </tbody>


    @endforeach

@endsection
