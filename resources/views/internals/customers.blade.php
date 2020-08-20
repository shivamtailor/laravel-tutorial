@extends('layout')

@section('content')
    <h1>Customers</h1>
    <ul>
        @foreach($customersList as $customer)
            <li>{{$customer}}</li>
        @endforeach
    </ul>
@endsection
