<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobKeySkills extends Model
{
    use HasFactory;
    protected $table = "job_key_skills";
    protected $primaryKey = "job_key_skills_id";
}
