@extends('layouts.adminMaster')

@section('content')

<div class="content " >

<div style="margin: 0% 8% ">
<div style="width: 100%">
<br><br>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header py-3" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title">Add New Style</h4>
            </div>
            <div class="card-body">
                <form action="{{route("style_save")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ProjectsName">Category</label>

                        <select name="category" class="form-control" id="exampleFormControlSelect1">
                            <option value="0">select a category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        @error('category')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="DescriptionOne">name</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%">Add Style</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
