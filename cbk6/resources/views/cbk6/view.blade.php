@extends('layouts.app')

@section('content')
 <div class="panel panel-info">
     <div class="panel-heading">
         <center>
         <h1>
         	<b>CBK6 Test Data</b>
         </h1>
         </center>
     </div>
     <div class="panel-body">
         <table class="table table-bordered table-hover ">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Baby Name</th>
                     <th>Birthday</th>
                     <th>Email</th>
                     <th>Phone 1</th>
                     <th>Phone 2</th>
                     <th>Photo</th>
                 </tr>
             </thead>
             <tbody>

                 @foreach ($week1 as $cbk6)
                     <tr>
                         <td>{{ $cbk6->id }}</td>
                         <td>{{ $cbk6->first_name }}</td>
                         <td>{{ $cbk6->last_name }}</td>
                         <td>{{ $cbk6->baby_name }}</td>
                         <td>{{ $cbk6->tanggal }}/{{ $cbk6->bulan }}/{{ $cbk6->tahun }}</td>
                         <td>{{ $cbk6->email }}</td>
                         <td>{{ $cbk6->phone1 }}</td>
                         <td>{{ $cbk6->phone2 }}</td>
                         <td><img src="{{ $cbk6->photo }}" width="100px" height="100px"></td>
                     </tr>
                 @endforeach
                 {{-- // end loop --}}
             </tbody>
         </table>
     </div>
 </div>
 
 @stop