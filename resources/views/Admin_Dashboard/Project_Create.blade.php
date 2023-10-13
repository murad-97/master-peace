@extends('layouts.adminMaster')

@section('content')
<div class="content " >

    <div style="margin: 0% 8% ">
        <div style="width: 100%">
     <br><br>

    <div class="container mt-1">
        <div class="card">
            <div class="card-header" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title py-3">Add New Project</h4>
            </div>
            <div class="card-body">
                <form action="Admins_Projects" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ProjectsName">Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsBreif">Brief</label>
                        <input type="text" class="form-control" id="ProjectsBreif" name="breif">
                    </div>
                    @error('breif')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionOne">Description</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="description2">
                    </div>
                    @error('description2')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionTwo">Details</label>
                        <input type="text" class="form-control" id="DescriptionTwo" name="description3">
                    </div>
                    @error('description3')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsLocation">Location</label>
                        <input type="text" class="form-control" id="ProjectsLocation" name="location">
                    </div>
                    @error('location')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsTime">Time</label>
                        <input type="text" class="form-control" id="ProjectsTime" name="time">
                    </div>
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsPeriod">Period</label>
                        <input type="text" class="form-control" id="ProjectsPeriod" name="period">
                    </div>
                    @error('period')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsTotal">Total</label>
                        <input type="text" class="form-control" id="ProjectsTotal" name="total">
                    </div>
                    @error('total')
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
                    
                    
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%">Add Project</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
