@extends('bootstrap-theme')

@section('content')
<h1>staff #{{ $staffs->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <tr><th> ID </th><td>{{ $staffs->id }}</td></tr>
        <tr><th> name  </th><td> {{ $staffs->name }} </td></tr>
        <tr><th> Age  </th><td> {{ $staffs->age }} </td></tr>
        <tr><th> salary  </th><td> {{ $staffs->salary }} </td></tr>
        <tr><th> phone   </th><td> {{ $staffs->phone }} </td></tr>
        
        
    </tbody>
</table>
@endsection
