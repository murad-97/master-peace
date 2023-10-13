@extends('layouts.adminMaster')

@section('content')
<div class="content " >

    <div style="margin: 0% 8% ">
        <div style="width: 100%">
     <br><br>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title py-3">Update User Data </h4>
            </div>
            <div class="card-body">          
              <form action="userupdate/{{ $user->id }}" method="POST">
              @csrf
              @method('PATCH') 
              

                    <div class="form-group">
                        <label for="ProjectsName">First Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name"  value="{{ $user->name }}">
                    </div>  
                    <div class="form-group">
                        <label for="ProjectsBreif">Last Name</label>
                        <input type="text" class="form-control" id="ProjectsBreif" name="LastName" value="{{ $user->LastName }}">
                    </div>
                    <div class="form-group">
                        <label for="DescriptionOne">Email</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="email"  value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="DescriptionOne">Phone</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="phone"  value="{{ $user->phone }}">
                    </div> <br>
                    <div class="col-md-4 col-12">
                     <img src="{{ asset('images/users/' . $user->image) }}" alt="{{ $user->name }}'s Profile Picture" class="img-fluid" style="max-width: 200px; height: auto;">

                     <div class="col-md-4 col-12">
                        <div class="form-group mt-3">
                            <label for="image">{{ __('Upload new image') }}</label>
                            <input id="image" name="image" type="file" accept="image/*" class="form-control-file" autocomplete="image" />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%"> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
