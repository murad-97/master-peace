
<body>
    <header>
        <h1>Donations Data</h1>
    </header>

    <div class="flex-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Donation ID</th>
                    <th>User Name</th>                    
                    <th>Category Name</th>
                    <th>Project Name</th>
                    <th>Donation Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Donations as $Donation)
                <tr>
                    <td>{{ $Donation['id'] }}</td>
                    <td>{{ $Donation['FirstName'.'LastName'] }}</td>
                    <td>{{ $Donation['categoryName'] }} </td>
                    <td>{{ $Donation['ProjectsName'] }}</td>
                    <td>{{ $Donation['DonationAmount'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- You can add your SQL data source here if needed -->
</body>
</html>
