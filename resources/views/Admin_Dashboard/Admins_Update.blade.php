@extends('layouts.adminMaster')

@section('content')

<div class="content " >

<div style="margin: 0% 8% ">
<div style="width: 100%">
<br><br>
    <div class="container">
        <div class="user-form">

            <form action="adminsupdate/{{ $admins->id }}" method="POST" enctype="multipart/form-data" >
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="ProjectsName">Name</label>
                    <input type="text" class="form-control" id="ProjectsName" name="name" value="{{ $admins->name }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="DescriptionOne">Email</label>
                    <input type="text" class="form-control" id="DescriptionOne" name="email" value="{{ $admins->email }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group mt-3">
                        <label for="image">{{ __('Upload new image') }}</label>
                        <input type="file" id="AdminImage" name="image">
                        @if ($admins->image)
                        <img src="{{ asset('images/users/' . $admins->image) }}" alt="Existing Image" width="100"><br>
                        @endif
                    </div>
                </div>
                @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                <br>

                <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%">update</button>
            </form>
        </div>
    </div>
    @endsection

