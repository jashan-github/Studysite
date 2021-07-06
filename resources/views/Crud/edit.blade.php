@extends('master')

@section('content')

    <div class="container mt-5">
        <div class="form-group">
            <div class="col-xl-6 col-12 m-auto">
                <div class="mb-10">
                    <h4> Update the data</h4>
                    <hr>
                    <div class="line" style="text-align: Center;">
                    </div>
                    <form action="{{ url('/edit') }}" method="post">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="id" value="{{ $items['id'] }}">

                            <div class="form-group">
                                <label for="topic"> Enter Topic name</label>
                                <input type="text" id="topic" name="topic" class="form-control"
                                    value="{{ $items['topic'] }}">
                                {!! $errors->first('topic', '<small class="text-danger">:message</small>') !!}<br>
                            </div>
                            <div class="form-group">
                                <label for="text"> Add a new program</label><br>
                                <input type="text" class="form-control" name="programs" value="{{ $items['programs'] }}">
                                </textarea>
                                {!! $errors->first('programs', '<small class="text-danger">:message</small>') !!}<br>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"> Update</button>
                    </form>
                </div>

            </div>

        </div>

    </div>

    </div>

@endsection
