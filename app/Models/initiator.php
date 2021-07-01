<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class initiator extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref', 'date.', 'type' , 'no'  ,'name.' ,'required_date' ,'description' ,
    ];
}
