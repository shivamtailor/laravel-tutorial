@extends('layout')

@section('title','Customer Details : '.$customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customer Details</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <table class="table">
                <tbody>
                <tr>
                    <th width="20%">ID</th>
                    <td>{{$customer->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$customer->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$customer->email}}</td>
                </tr>
                <tr>
                    <th>Company</th>
                    <td>{{$customer->company->name}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$customer->active}}</td>
                </tr>
                </tbody>
            </table>


        </div>
    </div>
@endsection
