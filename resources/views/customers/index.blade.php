@extends('layout')

@section('title','Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers List</h1>
            <a class="btn btn-primary" href="/customers/create">Create Customer</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-12">
            <table class="table table-sm">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Company</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customersList as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->company->name}}</td>
                        <td>{{$customer->active}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
