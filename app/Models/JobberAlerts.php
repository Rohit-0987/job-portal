<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobberAlerts extends Model
{
    use HasFactory;
    protected $table = "jobber_alerts";
    protected $primaryKey = "jobber_alerts_id";
}
