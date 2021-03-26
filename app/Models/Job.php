<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
    ];

    //Funcion para definir la relación entre modelos
    public function departments(){ //Job pertenece a un Department
        return $this->belongsTo(Department::class);
    }

    public function employees(){ //Job puede estar en muchos employees
        return $this->hasMany(Employee::class);
    }
}
