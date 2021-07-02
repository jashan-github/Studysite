@extends('master')



@section('content')

    <h2> Some Basic Programs for Practice </h2>
    {{-- CRUD Operation --}}
    <a href="insert" class="btn btn-dark" style="margin-left:87%; bg-color-blue; margin-top:1px;"> Add new program</a>

    {{-- <style>
        table,
        th,
        td {
            border: 1px solid black;
            /* /* margin-left: 20px;
            margin-top: 50px; */
            padding: 5px; */
        }

    </style> --}}



    <div class="container mt-5">
        <table class="datatable table table-borded" style="width: 100%">

            <thead>
                <th> Id</th>
                <th> Topic</th>
                <th> Programs</th>
                <th> Edit</th>
                <th> Delete</th>
            </thead>
            <tbody>
                <?php foreach ($dataArray as $program){
                    $program = (array) $program;
                    ?>
                    <tr>
                        <th> {{ $program['id'] }}</th>
                        <td> {{ $program['Topic'] }}</td>
                        <td> {{ $program['Programs'] }}</td>
                        <td> <a href="Edit"> Edit </a> </td>
                        <td> <a href="Delete"> Delete </a> </td>
                    </tr>

                <?php } ?>
            </table>
    </div>

    </table>
    {{-- // pagination --}}
    <script type="text/javascript">
        $(document).ready(function(){

             $('.datatable').DataTable();
         });
     </script>

@endsection
