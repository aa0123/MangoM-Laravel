@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Please Login/Register to continue</h1>
    <p>Login form</p>
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                    @component('components.user')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection