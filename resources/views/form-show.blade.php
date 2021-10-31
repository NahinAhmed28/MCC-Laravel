@include('layouts.app')
@extends('sidebarTemplate')

@section('content')
  <x-header componentName="members list" />

   
        
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        @foreach ($data as $dat)
        <tbody>
            <tr>
                <td scope="col">{{$dat->id}}</td>
                <td scope="col">{{$dat->name}}</td>
                <td scope="col">{{$dat->email}}</td>
                <td scope="col">{{$dat->address}}</td>
              </tr>
        </tbody>


    @endforeach

@endsection
