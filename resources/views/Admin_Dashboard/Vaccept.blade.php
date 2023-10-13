@extends('layouts.adminMaster')

@section('content')

<div class="content " >
<div style="margin: 0% 8%">
  <div style="width: 100%" > 
<br><br>
      <h1 class="mx-auto"> Accepted Volunteeres </h1>  

      <!-- resources/views/send-email.blade.php -->


    <br>
      <table class="table table-hover">
        <thead style="background-color: rgba(117, 192, 157, 0.489)">
           <tr>
                      <th> ID</th>
                      <th>User ID</th>
                      <th>Address</th>
                      <th>CV</th>
                      <th>email</th>
                      <th>Languages</th>
                      <th>day </th>
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach ($vaccepts as $vaccept)
                <tr>
                    <td>{{ $vaccept->id }}</td>
                    <td>{{ $vaccept->user_id }}</td>
                    <td>{{ $vaccept->Address }} </td>
                       <td scope="col"><a href="{{ url('uplods/' . $vaccept->CV) }}">Show file</a></td>

                    <td>{{ $vaccept->email }}</td>
                    <td>{{ $vaccept->Languages}} </td>
                    <td>{{ $vaccept->day}} </td>
                   
              
                    @endforeach
                </tr> 
                
              </tbody>
          </table>
      </div>
      </div>
@endsection

