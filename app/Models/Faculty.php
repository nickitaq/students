<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    //this faculty has students
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
