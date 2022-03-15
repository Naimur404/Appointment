@extends('master')


@section('content')
    <div class="row">
        <div class="col-md-6 ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center ">
                    <h3>Add Appoinment</h3>
                    <div class="card ">

                        <form action="" method="GET" id="formSubmit">
                            <div class="row justify-content-between text-left">
                                <div class="form-group flex-column d-flex "> <label class="form-control-label px-3">
                                        Date<span class="text-danger"> *</span></label> <input type="date" id="date"
                                        name="appointment_date" placeholder="Date" onblur="validate(1)"> </div>

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
                                        <select name="department_id" id="name" class="form-control">
                                            <option value="">Please select a doctor</option>
                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex"> <label for="priority">Fee</label>
                                        <select name="id" id="fee" class="form-control">

                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-end ">
                                    <div class="form-group flex-column d-flex " id="button"> <button type="submit"
                                            class="btn-block btn-primary hello" id="submit">Add Doctor</button> </div>
                                </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <div class="col-md-6 row d-flex justify-content-center">

        <div class="card-body col-xl-7 col-lg-8 col-md-9 col-11 text-center ">

            <table class="table table-hover table-striped ">
                <tr>
                    <th>SN</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Fee</th>


                </tr>
                <tr id="data">
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </table>
        </div>
    </div>
    </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

            jQuery('#formSubmit').on('submit', function(e) {
                let did = $('#name').val();
                let date = $('#date').val();
                let fee = $('#fee').val();


                jQuery.ajax({
                    url: '/getdata',
                    type: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        did: did,
                        date: date,
                        fee: fee,

                    },
                    
                    success: function(result) {
                        jQuery('#data').html(result)

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
                let fid = jQuery(this).val();

                jQuery.ajax({
                    url: '/gethide',
                    type: 'post',
                    data: 'fid=' + fid + '&_token={{ csrf_token() }}',
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
