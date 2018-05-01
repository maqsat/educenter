<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable= ['title','specialty','date_arrival','group_number','semester'];
}
