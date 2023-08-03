<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table = "jobs";
    protected $primaryKey = "jobs_id";

    function getJobApplications() {
        return $this->hasMany(JobApplications::class, 'jobs_id', 'jobs_id');
    }

    function getJobRequirements() {
        return $this->hasMany(JobRequirements::class, 'jobs_id', 'jobs_id');
    }

    function getJobSkills() {
        return $this->hasMany(JobKeySkills::class, 'jobs_id', 'jobs_id');
    }
}
