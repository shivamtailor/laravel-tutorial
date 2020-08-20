@extends('layout')

@section('content')
    <h1>Customers</h1>

    <form action="customers" method="post" class="pb-5">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
    <ul class="list-group">
        @foreach($customersList as $customer)
            <li class="list-group-item">{{$customer->name}}</li>
        @endforeach
    </ul>
@endsection
