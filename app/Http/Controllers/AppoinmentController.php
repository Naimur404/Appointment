<?php

namespace App\Http\Controllers;

use App\Models\Appoinmnet;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class AppoinmentController extends Controller
{
    public function index(Request $request)
    {

        $departments = Department::orderby('id', 'asc')->get();

        return view('pages.appoinment.index', compact('departments'));
    }
    public function getdoctor(Request $request)
    {
        $did = $request->post('did');
        $doctors = Doctor::where('department_id', $did)->orderby('name', 'asc')->get();
        $html = '<option value="">Please select a doctor</option>';

        foreach ($doctors as $doctor) {
            $html .= '<option value="' . $doctor->id . '">' . $doctor->name . '</option>';
        }
        echo $html;
    }
    public function getfee(Request $request)
    {
        $fid = $request->post('fid');
        $date = $request->post('date');

        $doctors = Doctor::where('id', $fid)->orderby('name', 'asc')->get();
        $html = '';




        foreach ($doctors as $doctor) {
            $html .= '<option value="' . $doctor->id . '">' . $doctor->fee . '</option>';
        }


        echo $html;
    }



    public function gethide(Request $request)
    {
        $fid = $request->post('fid');
        $date = $request->post('date');
        $appoinments = Appoinmnet::orderby('id', 'desc')->get();
        $html4 = '<p> Not Aviable</P>';
        $html1 = '<p>Aviable</P>
        <button type="submit"
        class="btn-block btn-primary hello">Add Doctor</button>';
        $html2 = '<p>not Aviable</P>
        <button type="submit"
        class="btn-block btn-primary hello" hidden>Add Doctor</button>';

        foreach ($appoinments as $appoinment) {

            if (($appoinment->doctor_id == $fid) < 1) {
echo $html1;

            } else if(($appoinment->appointment_date == $date) && ($appoinment->doctor_id == $fid)) {
                echo $html2;
            }
        }
    }



    public function getdata(Request $request)
    {
        $fid = $request->post('fid');
        $date = $request->post('date');

        $doctors = Doctor::where('id', $fid)->orderby('name', 'asc')->get();

        foreach ($doctors as $doctor) {
            $html3 = '<td>' . $doctor->name . '</td>';
        }
        echo $html3;
    }
}
