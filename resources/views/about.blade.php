@extends('layouts.app')

@section('title','About Us')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong>{{ __('About Us') }}</strong></div>
                    <div class="card-body">
                        {{ __('Description about your company.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

