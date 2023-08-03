<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateBookmark extends Model
{
    use HasFactory;
    protected $table = "candidate_bookmark";
    protected $primaryKey = "candidate_bookmark_id";

    function getJobApplications() {
        return $this->hasOne(JobApplications::class, 'job_applications_id', 'job_applications_id');
    }
}
