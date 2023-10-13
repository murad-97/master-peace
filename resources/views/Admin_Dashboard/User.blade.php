@extends('layouts.adminMaster')

@section('content')

<div class="content">
    <div style="margin: 0% 8%">
        <div style="width: 100%">
            <br><br>
            <h1 class="mx-auto">Manage Your Users</h1>
            <a href="user_Create"><button class="btn btn-success" type="submit" style="position:absolute; right:8%;">+ Add User</button></a>
            <br><br>

            <table class="table table-hover">
                <thead style="background-color: rgba(117, 192, 157, 0.489)">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th >Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['LastName'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>
                            <div>
                                @if ($user->image)
                                <img src="{{ asset('images/users/' . $user->image) }}" alt="{{ $user->name }}"
                                    width="60" height="60">
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="userdelete/{{ $user['id'] }}" method="POST"
                                        style="margin-bottom: 2px">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn  fa fa-trash text-danger fa-lg show_confirm"
                                            type="submit" value="DELETE"></button>
                                    </form>
                                </div>
                                {{-- <div class="col-md-6">
                                    <form action="useredit/{{ $user['id'] }}" method=""
                                        style="margin-bottom: 2px">
                                        @csrf
                                        <button class="btn fa-regular fa-pen-to-square text-warning fa-lg"
                                            type="submit" value="Update"></button>
                                    </form>
                                </div> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        var deleteButtons = document.querySelectorAll('.show_confirm');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var form = button.closest("form");

                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then(function (willDelete) {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
