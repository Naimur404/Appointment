@extends('master')


@section('content')
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Edit Doctor</h3>

                <div class="card">

                    <form class="form-card"  action="{{ route('doctor.update', $doctor->id) }}" method="POST">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                    Name<span class="text-danger"> *</span></label> <input type="text" id="fname"
                                    name="name" placeholder="Enter your name" onblur="validate(1)" value="{{ $doctor->name }}"> </div>

                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group flex-column d-flex"> <label class="form-control-label px-3">Phone<span
                                        class="text-danger">
                                        *</span></label> <input type="number" id="email" name="phone" placeholder=""
                                    onblur="validate(3)" value="{{ $doctor->phone }}"> </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group flex-column d-flex"> <label class="form-control-label px-3">Fee<span
                                            class="text-danger"> *</span></label> <input type="text" id="job" name="fee"
                                        placeholder="" onblur="validate(5)" value="{{ $doctor->fee }}"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label for="priority">Please select a
                                        department</label>
                                    <select name="department_id" id="" class="form-control">

                                        <option value="">Please select a department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" {{ $doctor->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-end ">
                                <div class="form-group flex-column d-flex "> <button type="submit"
                                        class="btn-block btn-primary hello">Add Doctor</button> </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
