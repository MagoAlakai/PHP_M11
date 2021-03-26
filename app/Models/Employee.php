<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'department_id',
        'job-id',
    ];

    //Funcion para definir la relación entre modelo Employee y modelos Department y Job
    public function jobs(){ // Employee tiene la clave foránea de job_id: belongsTo()
        return $this->belongsTo(Job::class);
    }

    public function departments(){ // Employee tiene la clave foránea de job_id: belongsTo()
        return $this->belongsToy(Department::class);
    }
}
