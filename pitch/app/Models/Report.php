<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
           'email',
           'report',
           'possible_evidence',
           'location',
           'phone_no',
           'subject'
    ];
}
