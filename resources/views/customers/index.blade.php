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
                    <th scope="col" width="20%;">Actions</th>
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
                        <td>
                            <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary btn-sm float-left mr-1">Edit</a>&nbsp;
                            <form action="/customers/{{ $customer->id }}" method="POST" class="float-left">
                                @method('DELETE')
                                @csrf
                                <button href="/customers/{{$customer->id}}" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
