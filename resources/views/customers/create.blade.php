@extends('layouts.app')

@section('title','Add New Customer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add New Customer') }}</div>

                    <div class="card-body">
                        <form action="/customers" method="post" class="pb-5">
                            @include('customers.form')
                            <button type="submit" class="btn btn-primary">Add Customer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
