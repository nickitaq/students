<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable= [
        'country_name'
    ];
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
        
    }
}
