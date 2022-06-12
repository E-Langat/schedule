<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $table = "e_school";
    protected $fillable = [
        "date",
        "subject",
        "homework",
    ];

}