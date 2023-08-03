<?php

namespace App\Http\Controllers;

use App\Models\CandidateUser;
use App\Models\ContactUs;
use App\Models\JobApplications;
use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\Notifications;
use App\Models\Subscribers;
use Mockery\Matcher\Subset;

class Home extends Controller
{
    public function homeJobs(Request $req) {
        $title = $req->input('job_title');
        $location = $req->input('location');
        if($location != "") {
            $jobs = Jobs::orWhere('city', 'Like', '%'.$location.'%')
            ->orWhere('country', 'Like', '%'.$location.'%')
            ->orWhere('address', 'Like', '%'.$location.'%')
            ->latest()->limit(8)->get();
        }
        if($title != "") {
            $jobs = Jobs::orWhere('city', 'Like', '%'.$title.'%')
            ->latest()->limit(8)->get();
        }
        if($title == "" && $location == "") {
            $jobs = Jobs::latest()->limit(8)->get();
        }
        $categerios = Jobs::select('industry')->distinct()->get();
        
        return view('index', ['jobs'=>$jobs, 'categerios'=>$categerios]);
    }
        
    public function jobDetails($id, Request $req) {
        $username = $req->session()->get('jobberUser');
        $job = Jobs::find($id);
        if(!$username) {
            return view('job-detail', ['job'=>$job]);
        }
        
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
        $check = JobApplications::where([
            ['candidate_id', '=', $candidate_id],
            ['jobs_id', '=', $id]
        ])->count();
        if($check) {
            $job->applied = true;
        }else {
            $job->applied = false;
        }

        return view('job-detail', ['job'=>$job]);
    }

    public function insertSubscribers(Request $req) {
        $email = $req->input('email');
        $check = Subscribers::where('email', $email)->get()->count();
        if($check) {
            return redirect()->back()->with('error', 'You have already subscribed!!');
        }
        $sub = new Subscribers;
        $sub->email = $email;
        $sub->save();

        $notification = "New user ". $email." has subscribed.";
        $noti = new Notifications;
        $noti->notification = $notification;
        $noti->seen = false;
        $noti->save();

        return redirect()->back()->with('status', 'You have subscribed successfully!');
    }

    public function insertContactus(Request $req) {
        $name = $req->input('name');
        $email = $req->input('email');
        $subject = $req->input('subject');
        $message = $req->input('message');

        $contact = new ContactUs;
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $contact->save();

        return redirect('contact')->with('status', 'Received the Message!! We will contact you soon.');
    }
}
