<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <!-- Include your CSS and JavaScript assets here -->
    <link rel="stylesheet" href="{{url('your-custom-styles.css')}}"> <!-- Add your custom CSS file here -->
    <style>
        /* Add inline CSS styles or customize the styles in your custom CSS file */
        body {
            background-color: #f0f0f0;
        }

        .container {
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Style for the image */
        .card-img {
            max-width: 100%;
            height: auto;
        }

        /* Customize other styles as needed */
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $user->image }}" class="card-img" alt="{{ $user->name }}">
                            <h5 class="card-title"> {{ $user->name }}</h5>
                            <div class="mb-3">
                                <label class="text-muted">Last Name:</label>
                                <p class="card-text">{{ $user->LastName}}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Description:</label>
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Details:</label>
                                <p class="card-text">{{ $user->phone }}</p>
                            </div>
                            
                            <!-- Add other product details as needed -->
                        </div>
                    </div>
                </div>

                <!-- Add other product details as needed -->
            </div>
        </div>
    </div>
</body>

</html>
