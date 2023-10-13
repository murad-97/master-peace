@extends('layouts.adminMaster')

@section('content')
<div class="content " >

    <div style="margin: 0% 8% ">
        <div style="width: 100%">
     <br><br>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header py-3" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title">Add New User</h4>
            </div>
            <div class="card-body">
                <form action="/admin/Admins_User" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ProjectsName">Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsBreif">Last Name</label>
                        <input type="text" class="form-control" id="ProjectsBreif" name="LastName">
                    </div>
                    @error('LastName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionOne">Email</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="email">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionTwo">Password</label>
                        <input type="password" class="form-control" id="DescriptionTwo" name="password">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsLocation">Phone</label>
                        <input type="text" class="form-control" id="ProjectsLocation" name="phone">
                    </div>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                    {{-- <div class="form-group">
                        <label for="ProjectsImage">Image</label>
                        <input type="file" class="form-control-file" id="ProjectsImage" name="image">
                    </div> --}}
                    <div class="col-md-4 col-12">
                        <div class="form-group mt-3">
                            <label for="image">{{ __('Upload new image') }}</label>
                            <input id="image" name="image" type="file" accept="image/*" class="form-control-file" autocomplete="image" />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%">Add User</button>
                </form>
            </div>
        </div>
    </div>  </div>
</div>

@endsection