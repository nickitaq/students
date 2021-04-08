<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = ['_token'];


    use HasFactory;
    public function student(){
        return $this->belongsTo (Student::class);
      }
      public function course(){
        return $this->belongsTo (Course::class);
      }
}
