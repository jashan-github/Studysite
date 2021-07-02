@extends('master')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <form method="post" action="{{ url('/add-program') }}">
                    <div class="card shadow mb-4">
                        <div class="car-header bg-success pt-2">
                            <div class="card-title font-weight-bold text-white text-center">
                                <style>
                                    body {
                                        margin-top: 50px;
                                        margin-right: 30px;

                                    }

                                </style>
                                <h5>Add new program </h5>

                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp

                                @endif
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="topic"> Enter Topic name</label>
                        <input type="text" id="topic" name="topic" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label for="text"> Add a new program</label><br>
                        <textarea class="form-control" name="program"> </textarea><br>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block" style="margin-left:88%; margin-top:10px;">
                        Submit</button>



            </div>
        </div>
    </div>

@endsection
