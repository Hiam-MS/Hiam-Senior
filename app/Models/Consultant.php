<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;


    protected $fillable=[
        'const_id','position','specialist','name','email','phone1'
        ,'phone2'
    ];
}
