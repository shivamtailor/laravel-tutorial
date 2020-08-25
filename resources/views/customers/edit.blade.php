@extends('layouts.app')

@section('title','Edit Customer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Customer') }}</div>

                    <div class="card-body">
                        <form action="/customers/{{$customer->id}}" method="post" class="pb-5">
                            @method('PATCH')
                            @include('customers.form')
                            <button type="submit" class="btn btn-primary">Save Customer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
