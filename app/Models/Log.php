<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'Log', 'Ref.', 'From' , 'To' , 'Subject' ,'Rev.' ,'Issue_Date' ,'Internal_Submitted_To' ,'Internal_Submitted_Date' ,
        'Internal_Returned_Date' ,'Returned_Date' ,
    ];
}
