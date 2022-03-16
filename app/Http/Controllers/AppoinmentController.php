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


        $doctors = Doctor::where('id', $fid)->orderby('name', 'asc')->get();
        $html = '';




        foreach ($doctors as $doctor) {
            $html .= '<option value="' . $doctor->id . '">' . $doctor->fee . '</option>';


        }


        echo $html;
    }



    public function gethide(Request $request)
    {
        $lid = $request->post('lid');
        $date = $request->post('date');
        //  Appoinmnet::orwhere('appointment_date' , $date)->orwhere('doctor_id',$fid)->exists();
        $html4 = '<p> Aviable</P>';
        $html1 = '<p> Aviable</P>
        <input type="button" name="add" value="Add Data" onclick="addStudent();" class="btn btn-success">';
        $html2 = '<p>not Aviable</P>
        <input type="button" name="add" value="Add Data" onclick="addStudent();" class="btn btn-success" hidden>';
        if(Appoinmnet::where('doctor_id',$lid)->exists()){
        if(Appoinmnet::where('appointment_date' , $date)->Exists()){

            echo $html2;}
        }else{
            echo $html1;
        }
        }




    public function appion(Request $request)
    {
        $appions = Appoinmnet::all();
        return view('pages.appoinment.home',compact('appions'));
    }
}
