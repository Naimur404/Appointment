@extends('master')


@section('content')
    <div class="row">
        <div class="col-md-6 ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center ">

                    <div class="card ">
                        <h3>Add Appoinment</h3>
                        <form action="" method="post" id="sample">
                            <div class="row justify-content-between text-left">
                                <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                        Date<span class="text-danger"> *</span></label> <input type="date" id="date"
                                        name="appointment_date" placeholder="Date"> </div>

                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label for="priority">Please select a
                                        department</label>
                                    <select name="department_id" id="department" class="form-control">

                                        <option value="">Please select a department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex"> <label for="priority">Doctor</label>
                                        <select name="doctor_id" id="name" class="form-control">
                                            <option value="">Please select a doctor</option>
                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex"> <label for="priority">Fee</label>
                                        <select name="fee" id="fee" class="form-control">

                                            <option value="" id="fee3"></option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-end ">
                                    <div class="form-group flex-column d-flex " id="button"> <input type="button" name="add"
                                            value="Add Data" onclick="addStudent();" class="btn btn-success hello"></div>
                                </div>

                            </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="col-md-6 justify-content-center appon ">

            <div class="card-body col-xl-7 col-lg-8 col-md-9 col-11 text-center ">

                <table class="table table-hover table-striped " id="tbl">
                    <thead>
                        <th>Sn</th>
                        <th>Date</th>
                        <th> Name</th>
                        <th>Fee</th>

                    </thead>

                    <tbody>

                    </tbody>

                </table>
                </form>
            </div>
            <div class="col-md-6 ">
                <div class=" justify-content-center">
                    <div class="text-center ">

                        <div class="card ">
                            <h3>Patient Information</h3>
                            <form action="" method="post" id="sample">
                                <div class="row justify-content-between text-left">
                                    <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                            Name<span class="text-danger"> *</span></label> <input type="text" id="date"
                                            name="appointment_date" placeholder="Name"> </div>

                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                            Phone<span class="text-danger"> *</span></label> <input type="text" id="date"
                                            name="appointment_date" placeholder="Name"> </div>

                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                            Payment<span class="text-danger"> *</span></label> <input type="number" id="date"
                                            name="appointment_date" placeholder="Total Fee"> </div>

                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                            <span class="text-danger"> *</span></label> <input type="text" id="date"
                                            name="appointment_date" placeholder="Paid ammount"> </div>

                                </div>






                                    <div class="row justify-content-end ">
                                        <div class="form-group flex-column d-flex " id="button"> <button type="submit" class="btn btn-danger hello"> Submit</button></div>
                                    </div>

                                </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>

    </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function addStudent() {


            var fee = document.getElementById("fee3").value;

            var td1 = tr.appendChild(document.createElement('td'));
            var td2 = tr.appendChild(document.createElement('td'));
            var td3 = tr.appendChild(document.createElement('td'));




            td1.innerHTML = name;
            td2.innerHTML = fee;
            td3.innerHTML =
                '<input type="button" name="del" value="Delete" onclick="delStudent(this);" class="btn btn-danger">'


            document.getElementById("tbl").appendChild(tr);
        }
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#department').change(function() {
                let did = jQuery(this).val();

                jQuery.ajax({
                    url: '/getdoctor',
                    type: 'post',
                    data: 'did=' + did + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#name').html(result)

                    }

                })
            });



            jQuery('#date').change(function() {
                let date = jQuery(this).val();

                jQuery.ajax({
                    url: '/gethide',
                    type: 'post',
                    data: 'date=' + date + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#button').html(result)

                    }

                })
            });
            jQuery('#name').change(function() {
                let lid = jQuery(this).val();

                jQuery.ajax({
                    url: '/gethide',
                    type: 'post',
                    data: 'lid=' + lid + '&_token={{ csrf_token() }}',
                    success: function(result) {

                        jQuery('#button').html(result)
                    }

                })
            });
            jQuery('#name').change(function() {
                let fid = jQuery(this).val();

                jQuery.ajax({
                    url: '/getfee',
                    type: 'post',
                    data: 'fid=' + fid + '&_token={{ csrf_token() }}',
                    success: function(result) {

                        jQuery('#fee').html(result)

                    }

                })
            });

        });
    </script>
@endsection
