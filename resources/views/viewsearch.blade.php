@extends('master')


@section('content')

    <div class="container">
        <div class="jumbotron"><br>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <h2> Some Basic Programs for Practice </h2>
            <hr>
            <div class="col-md-4">
                <form action="{{ url('/search') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="seach" name="search" id="search" class="form-control">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary"> Search</button>
                        </span>
                    </div>
                </form>

            </div>
            <div class="line" style="text-align: right;">
                <a href="{{ url('insert') }}" class="btn btn-primary"> Add program</a>
            </div><br>

            <table class="table table-borded">
                <thead class="thead-dark">
                    <tr>
                        <th> ID</th>
                        <th> Topic</th>
                        <th> Programs</th>
                        <th> Edit</th>
                        <th> Delete</th>
                    </tr>
                <tbody>
                    </thead>
                    <?php
                     $i = 1;
                     foreach ($items as $programs){

                        ?>
                        <tr style="background: white;">
                            <td> {{ $i }}</td>
                            <td> {{ $programs->topic }}</td>
                            <td> {{ $programs->programs }}</td>
                            <td> <a href={{ 'edit/' . $programs->id }}> Edit </a> </td>
                            <td> <a onclick="return confirm('Are you sure you want to delete this item?');"
                                    href={{ 'delete/' . $programs->id }}> Delete </a> </td>
                        </tr>
                    <?php  $i++; } ?>
            </table>
        </div>
    </div>
</div>


@endsection
