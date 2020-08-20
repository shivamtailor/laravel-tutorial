@extends('layout')

@section('title','Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="customers" method="post" class="pb-5">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="nameError" value="{{old('name')}}">
                    <small id="nameError" class="form-text text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailError"  value="{{old('email')}}">
                    <small id="emailError" class="form-text text-danger">{{ $errors->first('email') }}</small>
                </div>
                <button type="submit" class="btn btn-primary">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                @foreach($customersList as $customer)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$customer->name}}
                        <span class="badge badge-primary badge-pill">{{$customer->email}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


@endsection
