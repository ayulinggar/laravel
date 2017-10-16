@extends('layouts.app')
@section('content')
 <div class="panel panel-info">
     <div class="panel-heading">
         <center>
         <h1>
         	<font style="lighting-color: Blue">Os Test Data</font>
         </h1>
         </center>
     </div>
     <div class="panel-body">
         <table class="table striped centered responsive-table" border="1">
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
                     <th>Media</th>
                 </tr>
             </thead>
             <tbody>

                 @foreach ($week1 as $os)
                     <tr>
                         <td>{{ $os->id }}</td>
                         <td>{{ $os->first_name }}</td>
                         <td>{{ $os->last_name }}</td>
                         <td>{{ $os->baby_name }}</td>
                         <td>{{ $os->tanggal }}/{{ $os->bulan }}/{{ $os->tahun }}</td>
                         <td>{{ $os->email }}</td>
                         <td>{{ $os->phone1 }}</td>
                         <td>{{ $os->phone2 }}</td>
                         <td><img class="materialboxed" width="250" src="{{ $os->media}}" ></td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
   
     </div>
 </div>
 
 @stop