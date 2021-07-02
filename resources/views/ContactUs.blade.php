@extends('master')


@section('content')

<div class="container">
    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">

            <style>
                body {
                    margin-top: 10px;
                    margin-right: 30px;
                }

            </style>
            <div class="card shadow mb-4">
                <div class="car-header bg-danger pt-2">
                    <div class="card-title font-weight-bold text-white text-center">
                        <h4> Contact us </h4>
                    </div>
                </div>
            </div>

            <!-- Success message -->
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name"
                        value="{{ old('name') }}" />
                    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}<br>
                </div>

                <div class="form-group">
                    <label for="email"> E-mail </label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail"
                        value="{{ old('email') }}" />
                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}<br>
                </div>

                <div class="form-group">
                    <label for="Subject"> Subject </label>
                    <input type="text" name="subject" id="subject" class="form-control">
                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}<br>
                </div>

                <div class="form-group">
                    <label for="Message"> Message</label>
                    <textarea class="form-control" name="message"> </textarea>
                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}<br>
                </div>

                <button type="submit" class="btn btn-dark btn-block"> Submit</button>
            </form>
        </div>
    </div>
</div>
    @endsection
