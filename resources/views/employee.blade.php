@include('layouts.app')
@extends('sidebarTemplate')

@section('content')

        <x-header componentName="Employee" />
<h3>Employee add  -> form fill up</h3>
        <form action="employee" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="Name">Name</label> 
                    <input type="text" class="form-control" id="Name" name="name" placeholder="enter name"  required>
                </div>
               

            </div>
            <div class="form-row">
                
                <div class="col-md-3 mb-3">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="enter mail" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address">address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="enter City" required>
                </div>
                {{-- <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="Zip" required>
                </div> --}}
            </div>

            {{-- <div class="form-group">
                <label for="File1">Image File Input</label>
                <input type="file" class="form-control-file" id="File1" name="file">
            </div> --}}
            {{-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
            </div> <br> --}}
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
<br> <br> 
        <a href="{{route('employee-show')}}" class="list-group-item list-group-item-action bg-light">Employee List</a>

@endsection
