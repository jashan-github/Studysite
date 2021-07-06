@extends('master')

@section('content')

    <div class="container mt-5">
        <div class="form-group">
            <div class="col-xl-6 col-12 m-auto">
                <div class="mb-10">
                    <form method="post" action=" {{ url('add-program') }} ">
                        <div class="card-body">

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                            @endif
                        </div>
                        <h2> Add a new program </h2>
                        <hr>
                        <div class="line" style="text-align: center;"><br>

                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="topic"> Enter Topic name</label>
                            <input type="text" id="topic" name="topic" class="form-control">
                            {!! $errors->first('topic', '<small class="text-danger">:message</small>') !!}<br>
                        </div>
                        <div class="form-group">
                            <label for="text"> Add a new program</label><br>
                            <textarea class="form-control" name="programs"> </textarea>
                            {!! $errors->first('programs', '<small class="text-danger">:message</small>') !!}<br>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"> Submit</button>
                    </form>
                </div>

            </div>

        </div>

    </div>

    </div>

@endsection
