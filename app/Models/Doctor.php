<?php

namespace App\Models;

use App\Http\Controllers\DepartmentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $fillable = [

        "name",
        "department_id",
        "phone",
        "fee",
    ];
    public function docotor()
    {
        return $this->belongsTo(Department::class);
    }
}
