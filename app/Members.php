<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable =['name','comments','filename']; // MassAssignment 대응 
}
