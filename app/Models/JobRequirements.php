<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequirements extends Model
{
    use HasFactory;
    protected $table = "job_requirements";
    protected $primaryKey = "job_requirements_id";

    
}
