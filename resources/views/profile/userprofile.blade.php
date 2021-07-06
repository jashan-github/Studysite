@extends('master')

@section('content')

    <section class="py-2">
        <div class="container" >
            <div class="row">
                <div class="col-md-10">
                    <div class=" col-15 m-auto">
                        <h1> My profile Page</h1><br>

                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif

                            <form action="profile-update" method="post">
                                @csrf
                            <div class="form-group col-md-5 m-auto ">
                                <label for="name "> Name </label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" /><br>
                            </div>
                            <div class="form-group col-md-5 m-auto">
                                <label for="name"> Phone Number </label><br>
                                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" /><br>
                            </div>
                            <div class="form-group col-md-5 m-auto">
                                <label for="name"> City </label>
                                <input type="text" name="city"  class="form-control" value="{{ $user->city }}" /><br>
                            </div>
                            <div class="form-group col-md-5 m-auto">
                                <label for="name"> Pincode </label>
                                <input type="text" name="pincode" class="form-control" value="{{ $user->pincode }}" /><br>
                                <div class="form-group col-md-5 m-auto">
                                <button type="submit" class="btn btn-primary">UPDATE PROFILE</button>
                            </div>
                        </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
