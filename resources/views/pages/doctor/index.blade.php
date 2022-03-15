@extends('master')


@section('content')

<div class="card">
    <a href="{{ route('doctor') }}" class="btn btn-success">Add Doctor</a>
    <div class="card-header">
        Manage Doctor
    </div>
    <div class="card-body">

        <table class="table table-hover table-striped">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Fee</th>

                <th style="">Action</th>
            </tr>
            @foreach ($doctors as $doctor)
                <tr>


                    <td>#</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->fee }}</td>

                    {{-- <td>{{ $district->parent->name }}</td> --}}
                    {{-- <td>{{ $district->quantity }}</td> --}}
                    <td><a href="{{ route('doctor.edit',$doctor->id) }}" class="btn btn-success">Edit</a>

                        {{-- <a href="{{ route('doctor.delete', $doctor->id) }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                        <div class="modal fade" id="deleteModal{{ $doctor->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure want To Delete?
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> --}}

                                        <form action="{{ route('doctor.delete', $doctor->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                        </form>







                    </td>

                </tr>
            @endforeach

        </table>


    </div>
</div>

@endsection
