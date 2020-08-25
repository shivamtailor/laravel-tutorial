@extends('layouts.app')

@section('title','Contact Us')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong>{{ __('Contact Us') }}</strong></div>
                    <div class="card-body">
                        @if(!session()->has('message'))
                            <form action="/contact" method="post">
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
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
                                    <small id="messageError" class="form-text text-danger">{{ $errors->first('message') }}</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                                @csrf
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

