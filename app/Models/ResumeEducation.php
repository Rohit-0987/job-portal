<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeEducation extends Model
{
    use HasFactory;
    protected $table = "resume_education";
    protected $primaryKey = "resume_education_id";
}
