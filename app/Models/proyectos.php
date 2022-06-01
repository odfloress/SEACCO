<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','start_date','end_date','status_id','user_id'];

    
}
