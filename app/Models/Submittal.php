<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submittal extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref', 'type', 'name','number', 'rev', 'date_issue','Return_date', 'action', 'refences',
    ];
}
