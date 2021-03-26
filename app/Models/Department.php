<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //Funcion para definir la relación entre modelos
    public function jobs(){ //Department tiene muchos jobs
        return $this->hasMany(Job::class);
    }

    public function employees(){ //Department puede estar en muchos employees
        return $this->hasMany(Employee::class);
    }
}
