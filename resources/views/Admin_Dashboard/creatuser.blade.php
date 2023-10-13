<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=""> --}}
 
<style>
    .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
</style></head>
  <body>
    <div class="container">
        <div class="user-form">
            <form action="Admins_User" method="POST">
                @csrf
                @method('post')
                <label for="userName">First Name</label>
                <input type="text" id="FirstName" name="name">
                <label for="last_name">Last Name</label>
                <input type="text" id="LastName" name="last_name">
                <label for="userEmail">Email</label>
                <input type="text" id="userEmail" name="email">
                <label for="userPassword">Password</label>
                <input type="text" id="userPassword" name="password">
                <label for="userImage">Image</label>
                <input type="file" id="userImage" name="image">
                <button class="btn btn-warning" type="submit">Add User</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" ></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}" ></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" ></script>
  </body>
</html>