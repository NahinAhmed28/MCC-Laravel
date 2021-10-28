@include('layouts.app')
@extends('sidebarTemplate')

@section('content')

        <x-header componentName="Form" />

        <form action="form" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name"  required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name"  required>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">City</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">State</label>
                    <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Zip</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                </div>
            </div> --}}

            <div class="form-group">
                <label for="File1">Image File Input</label>
                <input type="file" class="form-control-file" id="File1" name="file">
            </div>
            {{-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
            </div> <br> --}}
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>



@endsection
