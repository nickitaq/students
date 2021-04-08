<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
   // student belongs to faculty
   public function faculty()
    {
    return $this->belongsTo(Faculty::class);
    }
    public function parent(){
        return $this->belongsTo(ParentModel::class);

    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    //public function course(){

    //    return $this->hasMany(Course::class);
    //}
    public function course(){
        return $this->hasOne (Course::class);
      }
}
