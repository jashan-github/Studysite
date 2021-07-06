@extends('master')

@section('content')

    <div class="container mt-5">
        <div class="form-group">
            <div class="col-xl-6 col-12 m-auto">
                <div class="mb-10">
                    <form method="post" action=" {{ url('change-password') }} ">
                        <div class="card-body">

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <h2> Change Password </h2>
                            <hr>
                            <div class="line">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label for="password"> Old Password </label><br>
                                    <input required="" type="password" name="old_password" id="password" class="form-control"
                                        placeholder="Enter old Password" />
                                    {!! $errors->first('old_password', '<small class="text-danger">:message</small>') !!}<br>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="password"> New Password </label><br>
                                    <input required="" type="password" name="new_password" id="new_password" class="form-control"
                                        placeholder="Enter new Password" />
                                    {!! $errors->first('new_password', '<small class="text-danger">:message</small>') !!}<br>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block"> Password Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

@endsection
