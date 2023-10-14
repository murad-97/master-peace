
@extends('layouts.adminMaster')

@section('content')
    <div class="content ">

        <div style="margin: 0% 8% ">
            <div style="width: 100%">
                <br><br>
                <h1 class="mx-auto"> Manage Your style </h1> <a href="{{route("Style_create")}}"><button class="btn btn-success"
                      type="submit" style="position:absolute ; right :8%"> + Add style</button>
                </a> <br><br>

                <table class="table table-hover">
                    <thead style="background-color: rgba(117, 192, 157, 0.489)">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($styles as $style)
                            <tr>
                                <td>{{ $style['id'] }}</td>
                                <td>{{ $style['name'] }}</td>
                                <td>{{ $style['description'] }}</td>
                                <td>
                                    <div>
                                        @if ($style->image)
                                            <img src="{{ asset('images/categories/' . $style->image) }}"
                                                alt="{{ $style->image }}" width="200" height="200">
                                        @endif
                                    </div>
                                </td>

                                <td>
                                    <form style="display: inline-block" action="styledelete/{{ $style['id'] }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="height:40px" class="btn btn-danger" type="submit" value="DELETE"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>

                                    </form>
                                    <form style="display: inline-block" action="styleedit/{{ $style['id'] }}" method="">
                                        @csrf
                                        <button style="height:40px" class="btn btn-primary" type="submit"
                                            value="Update">Edit</button>
                                    </form>



                                    {{-- <button  class="btn btn-danger">Delete</button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var deleteButtons = document.querySelectorAll('.show_confirm');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var form = button.closest("form");

                    swal({
                        title: "Are you sure you want to delete this record?",
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then(function(willDelete) {
                        if (willDelete) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
