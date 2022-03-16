@extends('master')


@section('content')

<div class="card">

    <div class="card-header">
        Appointment List
    </div>
    <div class="card-body">

        <table class="table table-hover table-striped">
            <tr>
                <th>SN</th>
                <th>Date</th>
                <th>Name</th>
                <th>Phone Number</th>



            </tr>
            @foreach ($appions as $appion)
                <tr>


                    <td>{{ $appion->appointment_no }}</td>
                    <td>{{ $appion->appointment_date }}</td>
                    <td>{{ $appion->patient_name }}</td>
                    <td>{{ $appion->patient_phone}}</td>


                    {{-- <td>{{ $district->parent->name }}</td> --}}
                    {{-- <td>{{ $district->quantity }}</td> --}}


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









                    </td>

                </tr>
            @endforeach

        </table>


    </div>
</div>

@endsection
