@extends('layouts.adminMaster')

@section('content')

<div class="content " >
  <div style="margin: 0% 8%">
    <div style="width: 100%" > 
  <br><br>

      <h1 class="mx-auto"> Our Volunteers </h1>  
    <br>
      <table class="table table-hover">
        <thead style="background-color: rgba(117, 192, 157, 0.489)">
           <tr>
                      <th>Volunteer ID</th>
                      <th>User ID</th>
                      <th>Email</th>
                      <th>Day</th>
                      <th>Address</th>
                      <th>Languages</th>
                      <th>Experience</th>
                      <th>CV</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($Volunteers as $Volunteer)
                <tr>
                    <td>{{ $Volunteer->fuid }}</td>
                    <td>{{ $Volunteer->user_id }}</td>
                    <td>{{ $Volunteer->email}}</td>
                    <td>{{ $Volunteer->day }}</td>
                    
                    <td>{{ $Volunteer->Address }} </td>
                    <td>{{ $Volunteer->Languages }}</td>
                    <td>{{ $Volunteer->Experience }} </td>
                      <td scope="col"><a href="{{ url('uplods/' . $Volunteer->CV) }}">Show file</a></td>
                      <td><a href="{{ route('accept') }}/{{ $Volunteer->fuid }}">Accept</a></td>

                    @endforeach
                </tr> 
                
              </tbody>
          </table>
        </div>
        </div>
          @endsection

