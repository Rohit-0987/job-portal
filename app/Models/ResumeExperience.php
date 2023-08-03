<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeExperience extends Model
{
    use HasFactory;
    protected $table = "resume_experience";
    protected $primaryKey = "resume_experience_id";
}
