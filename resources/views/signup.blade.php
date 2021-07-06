@extends('master')

@section('content')
    <div class="container mt-3">
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form method="post" action=" {{ url('user-store') }} ">
                    <div class="card shadow mb-4">
                        <div class="car-header bg-success pt-2">
                            <div class="card-title font-weight-bold text-white text-center">

                               <h4> Welcome to StudySite </h4>
                            </div>
                        </div>

                        <div class="card-body">

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif


                            <div class="form-group">
                                <label for="name"> Name </label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name"
                                    value="{{ old('name') }}" />
                                {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}<br>
                            </div>
                            <div class="form-group">
                                <label for="phone"> Mobile number </label>
                                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter your Phone"
                                    value="{{ old('phone') }}">
                                {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}<br>
                            </div>


                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail"
                                    value="{{ old('email') }}" />
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}<br>
                            </div>

                            <div class="form-group">
                                <label for="password"> Password </label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter Password" value="{{ old('password') }}" />
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}<br>
                            </div>

                            <div class="form-group">
                                <label for="confirm_password"> Confirm Password </label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                    placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                                {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                            </div>

                        </div>

                        <div class="card-footer d-inline-block">
                            <button type="submit" class="btn btn-success"> Register </button>
                            <p class="float-right mt-2"> Already have an account? <a href="{{ url('user-login') }}"
                                    class="text-success"> Login </a> </p>
                        </div>
                        @csrf
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
