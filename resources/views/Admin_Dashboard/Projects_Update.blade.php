@extends('layouts.adminMaster')

@section('content')

<div class="content " >

<div style="margin: 0% 8% ">
<div style="width: 100%">
<br><br>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title py-3" >Add New Project</h4>
            </div>
            <div class="card-body">          
              <form action="productupdate/{{ $product->id }}" method="POST">
              @csrf
              @method('PATCH') 
              

                    <div class="form-group">
                        <label for="ProjectsName">Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name"  value="{{ $product->name }}">
                    </div>  
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsBreif">Brief</label>
                        <input type="text" class="form-control" id="ProjectsBreif" name="breif" value="{{ $product->shortDescription }}">
                    </div>
                    @error('breif')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionOne">Description</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="description2"  value="{{ $product->longDescription }}">
                    </div>
                    @error('description2')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionTwo">prot</label>
                        <input type="text" class="form-control" id="DescriptionTwo" name="description3" value="{{ $product->prot }}">
                    </div>
                    @error('description3')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsLocation">price</label>
                        <input type="text" class="form-control" id="ProjectsLocation" name="price"  value="{{ $product->price }}">
                    </div>
                    @error('location')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsTime">cart des</label>
                        <input type="text" class="form-control" id="ProjectsTime" name="time" value="{{ $product->cartDescription }}">
                    </div>
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   
                    <div class="col-md-4 col-12">
                      @if ($product->img)
                          <img src="{{ asset('images/users/' . $product->img) }}" alt="{{ $product->name }}'s Project Picture" class="img-fluid" style="max-width: 200px; height: auto;" requ>
                      @endif
      
                      <div class="form-group mt-3">
                          <label for="image">{{ __('Upload new image') }}</label>
                          <input id="image" name="image" type="file" accept="image/*" class="form-control-file" :value="old('image', $product->img)" autocomplete="image" />
                          <x-input-error class="mt-2" :messages="$errors->get('image')" />
                      </div>
                  </div>
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%"> Update Project</button>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
