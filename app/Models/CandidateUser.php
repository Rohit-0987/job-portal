<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateUser extends Model
{
    use HasFactory;
    protected $table = "candidate_user";
    protected $primaryKey = "candidate_id";

    function getJobApplications() {
        return $this->hasMany(JobApplications::class, 'candidate_id', 'candidate_id');
    }
}
