@extends('employees.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Yonder Employees</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">Address : {{ $employees->surname }}</p>
        <p class="card-text">Phone : {{ $employees->address }}</p>
  </div>
       
    </hr>
  
  </div>
</div>