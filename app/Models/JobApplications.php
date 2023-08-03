<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplications extends Model
{
    use HasFactory;
    protected $table = "job_applications";
    protected $primaryKey = "job_applications_id";

    function getJobber() {
        return $this->hasMany(CandidateUser::class, 'candidate_id', 'candidate_id');
    }

    function getJobs() {
        return $this->hasMany(Jobs::class, 'jobs_id', 'jobs_id');
    }

    function getBookmarks() {
        return $this->hasMany(
            CandidateBookmark::class, 
            'job_applications_id', 'job_applications_id', 
            'candidate_id', 'candidate_id'
        );
    }
    
}
