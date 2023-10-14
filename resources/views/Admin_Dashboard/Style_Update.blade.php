@extends('layouts.adminMaster')

@section('content')
<div class="content " >

    <div style="margin: 0% 8% ">
        <div style="width: 100%">
     <br><br>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title py-3">Update category Data </h4>
            </div>
            <div class="card-body">
              <form action="categoryupdate/{{ $category->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')


                    <div class="form-group">
                        <label for="ProjectsName">Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name"  value="{{ $category->name }}">
                    </div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    <div class="form-group">
                        <label for="DescriptionOne">Description</label>
                        <textarea type="text" class="form-control" id="DescriptionOne" name="description" >{{ $category->description }}</textarea>
                    </div>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                    <div class="col-md-4 col-12">
                     <img src="{{ asset('images/categories/' . $category->image) }}" alt="{{ $category->name }}'s Picture" class="img-fluid" style="max-width: 200px; height: auto;">

                     <div >
                        <div class="form-group mt-3">
                            <label for="image">{{ __('Upload new image') }}</label>
                            <input id="image" name="image" type="file"  class="form-control-file" a />
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
