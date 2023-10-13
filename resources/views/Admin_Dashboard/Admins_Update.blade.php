<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin> --}}
  </head>
  <body>
    <div class="container">
        <div class="user-form">
          <form action="adminsupdate/{{ $admins->id }}" method="POST">
            @csrf
            {{-- @method('PATCH')  --}}
            
                <label for="FirstName">First Name</label>
                <input type="text" id="FirstName" name="name" value="{{ $admins->name }}">
                hhhh
                <label for="LastName">Last Name</label>
                <input type="text" id="LastName" name="last_name" value="{{ $admins->last_name }}">
                <label for="userEmail">Email</label>
                <input type="text" id="AdminEmail" name="email" value="{{ $admins->email }}">
                <label for="AdminImage">Image</label>
                <input type="file" id="AdminImage" name="AdminImage">
                @if ($admins->image)
                <img src="{{ asset('assets/img/' . $admins->image) }}" alt="Existing Image" width="100"><br>
                @endif
                {{-- <label for="AdminPassword">Password</label>
                <input type="text" id="AdminPassword" name="password"> --}}
                <button class="btn btn-warning" type="submit">Update</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" ></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" ></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" ></script>
  </body>
</html>