@INCLUDE('layouts.app')
@extends('sidebarTemplate')

@section('content')
<div>
  <x-header componentName="User" />
    <h3> user </h3>
    <span>&#8618;</span> <a href="{{route('userdata')}}" class="bg-light text-success display-4">User Info</a>
    </div>
    
@endsection

