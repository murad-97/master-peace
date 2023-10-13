@extends('layouts.adminMaster')

@section('content')

<div class="content " >
<div style="margin: 0% 8%">
  <div style="width: 100%" > 
<br><br>
      <h1 class="mx-auto"> Donated Ressourses </h1>  
    <br>
      <table class="table table-hover">
        <thead style="background-color: rgba(117, 192, 157, 0.489)">
           <tr>
                      <th>Volunteer ID</th>
                      <th>User ID</th>
                      <th>Service</th>
                      <th>Address</th>
                      <th>Message</th>
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach ($Donors as $Donor)
                <tr>
                    <td>{{ $Donor['id'] }}</td>
                    <td>{{ $Donor['user_id'] }}</td>
                    <td>{{ $Donor['address'] }} </td>
                    <td>{{ $Donor['service'] }}</td>
                    <td>{{ $Donor['message'] }} </td>
              
                    @endforeach
                </tr> 
                
              </tbody>
          </table>
      </div>
      </div>
@endsection

