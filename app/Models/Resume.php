<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $table = "resume";
    protected $primaryKey = "resume_id";

    function getEducation() {
        return $this->hasMany(ResumeEducation::class, 'resume_id', 'resume_id');
    }

    function getExperience() {
        return $this->hasMany(ResumeExperience::class, 'resume_id', 'resume_id');
    }

    function getSkills() {
        return $this->hasMany(ResumeSkills::class, 'resume_id', 'resume_id');
    }
}
