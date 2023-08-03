<?php

namespace App\Http\Controllers;

use App\Models\CandidateBookmark;
use Illuminate\Http\Request;

use App\Models\JobApplications;
use App\Models\CandidateUser;
use App\Models\JobberAlerts;
use App\Models\Jobs;
use App\Models\Resume;
use App\Models\ResumeEducation;
use App\Models\ResumeExperience;
use App\Models\ResumeSkills;
use App\Models\Notifications;
use Illuminate\Notifications\Notification;

class Jobber extends Controller
{
    public function jobberSignupCheck(REQUEST $req) {
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $username = $req->input('username');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $password = $req->input('password');

        $check_username = CandidateUser::where('username', $username)->count();
        if($check_username) {
            return redirect('jobber-signup')->with('status', 'Username already exists!!');
        }
        $jobber = new CandidateUser;
        $jobber->fname = $fname;
        $jobber->lname = $lname;
        $jobber->username = $username;
        $jobber->email = $email;
        $jobber->phone = $phone;
        $jobber->password = $password;
        $jobber->save();

        $req->session()->put('jobberUser', $username);

        $notification = "New Candidate ".$fname." ".$lname. " created an account!!";
        $noti = new Notifications;
        $noti->notification = $notification;
        $noti->seen = false;
        $noti->save();

        return redirect('jobber-dashboard');

    }

    public function jobberSigninCheck(Request $req) {
        $username = $req->input('username');
        $password = $req->input('password');

        $check = CandidateUser::where([
                ['username', '=', $username],
                ['password', '=', $password]
        ])->count();

        if($check == 1){
            $req->session()->put('jobberUser', $username);
            return redirect()->back()->with('status', 'Logged in Successfully');
        }else {
            return redirect()->back()->with('error', 'Invalid credentials!!');
        }
    }

    public function jobberLogout(Request $req) {
        $req->session()->flush('jobberUser');
        return redirect()->back()->with('status', 'Logged Out Successfully');
    }

    public function jobberLogoutInside(Request $req) {
        $req->session()->flush('jobberUser');
        return redirect('/')->with('status', 'Logged Out Successfully');
    }

    public function jobApply(Request $req, $job_id) {
        $username = $req->session()->get('jobberUser');
        if(!$username) {
            return redirect()->back()->with('error', 'You have to signin before applying!!');
        }
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
        //echo $jobber_id;
        //echo $job_id;

        $job_application = new JobApplications;
        $job_application->candidate_id = $candidate_id;
        $job_application->jobs_id = $job_id;
        $job_application->save();

        return redirect()->back()->with('jobApplied', 'Applied for the job Successfully!');

    }

    public function jobberAppliedJobs(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
        //echo $candidate_id;
        $data = JobApplications::where('candidate_id', $candidate_id)->get();
        //echo "<pre>";
        //echo $data;
        return view('jobber-applied-jobs', ['data'=>$data]);
    }

    public function jobberBookmark(Request $req, $job_applications_id) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;  
        $bookmark = new CandidateBookmark;
        $bookmark->job_applications_id = $job_applications_id;
        $bookmark->candidate_id = $candidate_id;
        $bookmark->save();
        
        $jobs_id = JobApplications::find($job_applications_id)->jobs_id;
        $job_title = Jobs::find($jobs_id)->job_title; 

        $notification = $username." has bookmarked your ". $job_title ." job.";
        $noti = new Notifications;
        $noti->notification = $notification;
        $noti->seen = false;
        $noti->save();

        return redirect('jobber-applied-jobs')->with('status', 'Job Bookmarked Successfully');
    }

    public function jobberUnbookmark(Request $req, $job_applications_id) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        CandidateBookmark::where([
            ['job_applications_id' , '=', $job_applications_id],
            ['candidate_id', '=', $candidate_id]
        ])->delete();

        return redirect()->back()->with('status', 'Job Bookmark removed Successfully');
    }



    public function jobSearch() {
        $defaultJobs = Jobs::latest()->limit(9)->get();
        return view('job-search', ['defaultJobs' => $defaultJobs]);
    }

    public function jobSearching(Request $req) {
        $title = $req->input('title');
        $location = $req->input('location');
        if($location != "") {
            $jobs = Jobs::orWhere('city', 'Like', '%'.$location.'%')
            ->orWhere('country', 'Like', '%'.$location.'%')
            ->orWhere('address', 'Like', '%'.$location.'%')
            ->latest()->limit(12)->get();
        }
        if($title != "") {
            $jobs = Jobs::orWhere('city', 'Like', '%'.$title.'%')
            ->latest()->limit(12)->get();
        }
        if($title == "" && $location == "") {
            $jobs = Jobs::latest()->limit(12)->get();
        }
        return view('job-search', ['jobs'=> $jobs]);

    }

    public function jobberBookmarks(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
        $data = CandidateBookmark::where('candidate_id', $candidate_id)->get();

        return view('jobber-bookmarks', ['data' => $data]);
    }

    public function jobberDashboard(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
        
        $applied_jobs = JobApplications::where('candidate_id', $candidate_id)->count();
        $bookmark = CandidateBookmark::where('candidate_id', $candidate_id)->count();
        return view('jobber-dashboard', ['applied_jobs' => $applied_jobs, 'bookmark' => $bookmark]);
    }

    public function jobberProfile(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        $data = CandidateUser::where('candidate_id', $candidate_id)->get();
        return view('jobber-profile', ['data'=>$data]);
    }

    public function jobberUpdateProfile(Request $req, $candidate_id) {
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $username = $req->input('username');
        $email = $req->input('email');
        $experience = $req->input('experience');
        $exp_salary = $req->input('exp_salary');
        $education = $req->input('education');
        $phone = $req->input('phone');
        $age = $req->input('age');
        $language = $req->input('language');
        $about_info = $req->input('about_info');

        $prev_username = $req->session()->get('jobberUser');
        $check = CandidateUser::where('username', $username)->count();
        if($check && $username != $prev_username) {
            return redirect('jobber-profile')->with('error', 'Username already exists');
        }
        $candidate = CandidateUser::find($candidate_id);
        $candidate->fname = $fname;
        $candidate->lname = $lname;
        $candidate->username = $username;
        $candidate->email = $email;
        $candidate->experience = $experience;
        $candidate->exp_salary = $exp_salary;
        $candidate->education = $education;
        $candidate->phone = $phone;
        $candidate->age = $age;
        $candidate->language = $language;
        $candidate->about_info = $about_info;
        $candidate->save();

        $req->session()->put('jobberUser', $username);
        return redirect('jobber-profile')->with('status', 'Profile Updated successfully');

    }

    public function jobberChangePasswordCheck(Request $req) {
        $old_password = $req->input('old_password');
        $new_password = $req->input('new_password');
        $c_password = $req->input('c_password');

        if($old_password == "" || $new_password == "" || $c_password == "") {
            return redirect('jobber-change-password')->with('error', 'You cannot keep fields empty!!');
        }
        if($old_password == $new_password) {
            return redirect('jobber-change-password')->with('error', 'New password is same as old password!!');
        }
        if($new_password != $c_password) {
            return redirect('jobber-change-password')->with('error', 'New passwords does not matches!!');
        }

        $username = $req->session()->get('jobberUser');
        
        $check = CandidateUser::where([
            ['username', '=', $username],
            ['password', '=', $old_password]
        ])->count();

        if($check == 1) {
            $id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
            $c_user = CandidateUser::find($id);
            $c_user->password = $new_password;
            $c_user->save();
            return redirect('jobber-change-password')->with('success', 'Password updated Successfully!!');
        }else {
            return redirect('jobber-change-password')->with('error', 'Old password is wrong!!');
        }
    }

    /*              Resume  section            */

    public function jobberCreateResume(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        $check = Resume::where('candidate_id', $candidate_id)->count();
        echo $check;
        if($check > 0) {
            return redirect('jobber-manage-resume')->with('error', 'You have already created the resume, so can update it!');
        }else {
            return view('jobber-create-resume');
        }
    }

    public function jobberResumeProfile(Request $req) {
        $name = $req->input('name');
        $job_category = $req->input('job_category');
        $professional_title = $req->input('professional_title');
        $email = $req->input('email');
        $resume_content = $req->input('resume_content');

        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        $resume = new Resume;
        $resume->name = $name;
        $resume->candidate_id = $candidate_id;
        $resume->job_category = $job_category;
        $resume->professional_title = $professional_title;
        $resume->email = $email;
        $resume->resume_content = $resume_content;
        $resume->save();

        $resume_id = Resume::latest()->get()[0]->resume_id;
        
        for($i = 1; $i <= 3; $i++) {
            $school_name = $req->input('school_name'.$i);
            $qualification = $req->input('qualification'.$i);
            $start_date = $req->input('start_date'.$i);
            $end_date = $req->input('end_date'.$i);
            $note = $req->input('edunote'.$i);

            $edu = new ResumeEducation;
            $edu->resume_id = $resume_id;
            $edu->school_name = $school_name;
            $edu->qualification = $qualification;
            $edu->start_date = $start_date;
            $edu->end_date = $end_date;
            $edu->note = $note;
            $edu->save();

        }

        for($i = 1; $i <= 3; $i++) {
            echo $job_title = $req->input('job_title'.$i);
            echo $designation = $req->input('designation'.$i);
            echo $expstartdate = $req->input('expstartdate'.$i);
            echo $expenddate = $req->input('expenddate'.$i);
            echo $expnote = $req->input('expnote'.$i);

            $exp = new ResumeExperience;
            $exp->resume_id = $resume_id;
            $exp->job_title = $job_title;
            $exp->designation = $designation;
            $exp->start_date = $expstartdate;
            $exp->end_date = $expenddate;
            $exp->note = $expnote;
            $exp->save();

        }

        
        for($i = 1; $i <= 3; $i++) {
            echo $skills = $req->input('skill'.$i);
            echo $percentage = $req->input('percentage'.$i);

            $skill = new ResumeSkills;
            $skill->resume_id = $resume_id;
            $skill->skill = $skills;
            $skill->percentage = $percentage;
            $skill->save();

        }
        return redirect('jobber-create-resume')->with('status', 'Resume Created Successfully');

    }

    public function jobberManageResume(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        $data = Resume::where('candidate_id', $candidate_id)->get();
        return view('jobber-manage-resume', ['data'=>$data]);
    }

    public function jobberUpdateResume(Request $req) {
        $name = $req->input('name');
        $resume_id = $req->input('resume_id');
        $job_category = $req->input('job_category');
        $professional_title = $req->input('professional_title');
        $email = $req->input('email');
        $resume_content = $req->input('resume_content');

        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        $resume = Resume::find($resume_id);
        $resume->name = $name;
        $resume->candidate_id = $candidate_id;
        $resume->job_category = $job_category;
        $resume->professional_title = $professional_title;
        $resume->email = $email;
        $resume->resume_content = $resume_content;
        $resume->save();

        //$resume_id = Resume::latest()->get()[0]->resume_id;
        ResumeEducation::where('resume_id', $resume_id)->delete();
        
        for($i = 1; $i <= 3; $i++) {
            $school_name = $req->input('school_name'.$i);
            $qualification = $req->input('qualification'.$i);
            $start_date = $req->input('start_date'.$i);
            $end_date = $req->input('end_date'.$i);
            $note = $req->input('edunote'.$i);

            $edu = new ResumeEducation;
            $edu->resume_id = $resume_id;
            $edu->school_name = $school_name;
            $edu->qualification = $qualification;
            $edu->start_date = $start_date;
            $edu->end_date = $end_date;
            $edu->note = $note;
            $edu->save();

        }

        ResumeExperience::where('resume_id', $resume_id)->delete();
        
        for($i = 1; $i <= 3; $i++) {
            echo $job_title = $req->input('job_title'.$i);
            echo $designation = $req->input('designation'.$i);
            echo $expstartdate = $req->input('expstartdate'.$i);
            echo $expenddate = $req->input('expenddate'.$i);
            echo $expnote = $req->input('expnote'.$i);

            $exp = new ResumeExperience;
            $exp->resume_id = $resume_id;
            $exp->job_title = $job_title;
            $exp->designation = $designation;
            $exp->start_date = $expstartdate;
            $exp->end_date = $expenddate;
            $exp->note = $expnote;
            $exp->save();

        }

        ResumeSkills::where('resume_id', $resume_id)->delete();
                
        for($i = 1; $i <= 3; $i++) {
            echo $skills = $req->input('skill'.$i);
            echo $percentage = $req->input('percentage'.$i);

            $skill = new ResumeSkills;
            $skill->resume_id = $resume_id;
            $skill->skill = $skills;
            $skill->percentage = $percentage;
            $skill->save();

        }
        return redirect('jobber-manage-resume')->with('status', 'Resume updated Successfully');

    }

    public function jobberAlert(Request $req) {
        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;

        $data = JobberAlerts::where('candidate_id', $candidate_id)->get();
        return view('jobber-alert', ['data' => $data]);
    }

    public function jobberSetJobAlert(Request $req) {
        $alert =  $req->input('alert');

        $username = $req->session()->get('jobberUser');
        $candidate_id = CandidateUser::where('username', $username)->get('candidate_id')[0]->candidate_id;
        JobberAlerts::where('candidate_id', $candidate_id)->delete();

        $job_alert = new JobberAlerts;
        $job_alert->candidate_id = $candidate_id;
        $job_alert->alert_category = $alert;
        $job_alert->save();

        return redirect('jobber-alert')->with('status', 'Alert Set Successfully!!');
    }
}
