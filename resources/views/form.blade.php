@include('layouts.app')
@extends('sidebarTemplate')

@section('content')

        <x-header componentName="Form" />
<h3>member add form fill up</h3>
        <form action="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Name</label> 
                    <input type="text" class="form-control" id="Name" name="name" placeholder="enter name"  required>
                </div>
               

            </div>
            <div class="form-row">
                
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="enter mail" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">address</label>
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



@endsection
