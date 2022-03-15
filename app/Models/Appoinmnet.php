<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinmnet extends Model
{
    public function departmenta(){
        return $this->hasMany(Doctor::class);
    }

    public function doctor(){
        return $this->hasMany(Department::class);
}
public function appionment(){
    $appionments = Appoinmnet::all();
    return $appionments;
}
}
