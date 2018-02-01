@extends('layout')
@section('main_content')
@foreach($employees as $employee)
@endforeach
<h1>{{$employee->firstname}} Gender:{{$employee->gender}} </h1>
@endsection