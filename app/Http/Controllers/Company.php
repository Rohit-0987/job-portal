<?php

namespace App\Http\Controllers;

use App\Models\CandidateUser;
use Illuminate\Http\Request;

use App\Models\CompanyUser;
use App\Models\JobApplications;
use App\Models\JobKeySkills;
use App\Models\JobRequirements;
use App\Models\Jobs;
use App\Models\Notifications;
use App\Models\Subscribers;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Redis;

use function PHPUnit\Framework\isEmpty;

class Company extends Controller
{
    public function signup(Request $req){
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $username = $req->input('username');
        $companyName = $req->input('companyName');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $password = $req->input('password');
        $cpassword = $req->input('cpassword');

        $check_username = CompanyUser::where('username', $username)->count();
        if($check_username) {
            return redirect('company-signup')->with('status', 'Username already exists!!');;
        }
        $companyUser = new CompanyUser;
        $companyUser->fname = $fname;
        $companyUser->lname = $lname;
        $companyUser->username = $username;
        $companyUser->companyName = $companyName;
        $companyUser->email = $email;
        $companyUser->phone = $phone;
        $companyUser->password = $password;
        $companyUser->save();

        $req->session()->put('companyUser', $username);
        return redirect('company-dashboard');
        
    }

    public function signin(Request $req) {
        $username = $req->input('username');
        $password = $req->input('password');

        $check = CompanyUser::where([
                ['username', '=', $username],
                ['password', '=', $password]
        ])->count();

        if($check == 1){
            $req->session()->put('companyUser', $username);
            return redirect('company-dashboard');
        }else {
            return redirect('company-signin')->with('error', 'Invalid credentials!!');

        }
    }

    public function companyProfileDetails(Request $req) {
        $username = $req->session()->get('companyUser');

        $data = CompanyUser::all()->where('username', $username);
        return view('company-profile', ['data'=>$data]);
    }

    public function companyProfileUpdate(Request $req) {
        $company_users_id  = $req->input('id'); 
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $username = $req->input('username');
        $companyName = $req->input('companyName');
        $email = $req->input('email');
        $phone = $req->input('phone');

        if($username == ""){
            return redirect('company-profile')->with('error', 'Username cannot be empty!!');
        }
        $check = CompanyUser::where('username', $username)->count();

        if($check > 1){
            return redirect('company-profile')->with('error', 'Username already exists!!');
        }
        $c_user = CompanyUser::find($company_users_id);
        $c_user->fname = $fname;
        $c_user->lname = $lname;
        $c_user->username = $username;
        $c_user->companyName = $companyName;
        $c_user->email = $email;
        $c_user->phone = $phone;
        $c_user->save();

        $req->session()->put('companyUser', $username);
        return redirect('company-profile')->with('status', 'Updated successfully!!');

    }

    public function companyLogout(Request $req){
        $req->session()->flush('companyUser');
        return redirect('/')->with('status', 'Logged Out Successfully');
    }

    public function insertJobs(Request $req){
        $job_title = $req->input('job_title');
        $job_description = $req->input('job_description');
        $working_type = $req->input('working_type');
        $industry = $req->input('industry');
        $job_type = $req->input('job_type');
        $carrer_level = $req->input('carrer_level');
        $experience = $req->input('experience');
        $qualification = $req->input('qualification');
        $gender = $req->input('gender');
        $deadline = $req->input('deadline');
        $country = $req->input('country');
        $city = $req->input('city');
        $address = $req->input('address');
        if($req->hasFile('job_img')){
            $lastid = Jobs::max('jobs_id');
            if($lastid == 0){
                $lastid = 1;
            }else{
                $lastid += 1;
            }
            $file = $req->file('job_img');
            $ext = $lastid.'_'.$file->getClientOriginalName();
            $file->move('job-profile-img/', $ext);
        }else {
            return redirect('company-post-job')->with('error', 'Job Profile Image Cannot be empty!!');
        }
        if($job_title == "") {
            return redirect('company-post-job')->with('error', 'Job title Cannot be empty!!');
        }
        if($job_description == "") {
            return redirect('company-post-job')->with('error', 'Job Description Cannot be empty!!');
        }
        if($working_type == "") {
            return redirect('company-post-job')->with('error', 'Working type Cannot be empty!!');
        }
        if($job_type == "") {
            return redirect('company-post-job')->with('error', 'Job type Cannot be empty!!');
        }
        if($carrer_level == "") {
            return redirect('company-post-job')->with('error', 'Carrer level Cannot be empty!!');
        }
        if($experience == "") {
            return redirect('company-post-job')->with('error', 'Experience Cannot be empty!!');
        }
        if($qualification == "") {
            return redirect('company-post-job')->with('error', 'Qualification Cannot be empty!!');
        }
        if($gender == "") {
            return redirect('company-post-job')->with('error', 'Gender Cannot be empty!!');
        }
        if($deadline == "") {
            return redirect('company-post-job')->with('error', 'Deadline Cannot be empty!!');
        }
        if($country == "") {
            return redirect('company-post-job')->with('error', 'Country Cannot be empty!!');
        }
        if($city == "") {
            return redirect('company-post-job')->with('error', 'City Cannot be empty!!');
        }
        if($address == "") {
            return redirect('company-post-job')->with('error', 'Address Cannot be empty!!');
        }
        if((string)$req->input('job_requirement1') == "") {
            return redirect('company-post-job')->with('error', 'Insert at Least One Requirement!!');
        }
        echo (string)$req->input('job_key_skill2');
        if((string)$req->input('job_key_skill1') == "") {
            return redirect('company-post-job')->with('error', 'At least 3 skills are Required!!');
        }
        if((string)$req->input('job_key_skill2') == "") {
            return redirect('company-post-job')->with('error', 'At least 3 skills are Required!!');
        }
        if((string)$req->input('job_key_skill3') == "") {
            return redirect('company-post-job')->with('error', 'At least 3 skills are Required!!');
        }
        
        $job = new Jobs;
        $job->job_title = $job_title;
        $job->job_img = $ext;
        $job->job_description = $job_description;
        $job->working_type = $working_type;
        $job->industry = $industry;
        $job->job_type = $job_type;
        $job->carrer_level = $carrer_level;
        $job->experience = $experience;
        $job->qualification = $qualification;
        $job->gender = $gender;
        $job->deadline = $deadline;
        $job->country = $country;
        $job->city = $city;
        $job->address = $address;
        $job->save();
        
        $jobs_id = Jobs::latest()->get('jobs_id')->first()->jobs_id;
        for($i = 1; $i < 9; $i++) {
            if($req->input('job_requirement'.$i) == "") {
                continue;
            }
            $job_req = new JobRequirements;
            $job_req->jobs_id = $jobs_id;
            $job_req->requirement = (string)$req->input('job_requirement'.$i);
            $job_req->save();
        }
        for($i = 1; $i < 11; $i++) {
            if($req->input('job_key_skill'.$i) == "") {
                continue;
            }

            $job_key_skills = new JobKeySkills;
            $job_key_skills->jobs_id = $jobs_id;
            $job_key_skills->skill = (string)$req->input('job_key_skill'.$i);
            $job_key_skills->save();
        }
        
        $notification = "Your Post for the ". $job_title." has been posted successfully.";
        $noti = new Notifications;
        $noti->notification = $notification;
        $noti->seen = false;
        $noti->save();

        return redirect('company-post-job')->with('status', 'Successfully Posted the Job!!');

    }

    public function companyManageApplications(Request $req) {
        $data = JobApplications::get();
        return view('company-manage-applications', ['data'=>$data]);
    }
    
    public function companyManageJobs() {
        $data = Jobs::get();
        return view('company-manage-jobs', ['data'=>$data]);
    }

    public function companyManageJobsEdit($job_id) {
        $data = Jobs::find($job_id);
        return view('company-manage-jobs-edit', ['data'=>$data]);
    }

    public function companyBookmarkApplication(Request $req, $job_id) {
        $job = JobApplications::find($job_id);
        $job->bookmark = true;
        $job->save();
        return redirect('company-manage-applications')->with('status', 'Successfully Bookmarked the Job Application!!');

    }

    public function companyUnbookmarkApplication(Request $req, $job_id) {
        $job = JobApplications::find($job_id);
        $job->bookmark = false;
        $job->save();
        return redirect()->back()->with('status', 'Successfully removed the Job Application from Bookmarks!!');

    }

    public function companyBookmarkResume() {
        $data = JobApplications::where('bookmark', true)->get();
        return view('company-bookmark-resume', ['data'=>$data]);
    }

    public function companyJobUpdate(Request $req) {
        $job_title = $req->input('job_title');
        $job_description = $req->input('job_description');
        $working_type = $req->input('working_type');
        $industry = $req->input('industry');
        $job_type = $req->input('job_type');
        $carrer_level = $req->input('carrer_level');
        $experience = $req->input('experience');
        $qualification = $req->input('qualification');
        $gender = $req->input('gender');
        $deadline = $req->input('deadline');
        $country = $req->input('country');
        $city = $req->input('city');
        $address = $req->input('address');
        $jobs_id = $req->input('jobs_id');
        if($req->hasFile('job_img')){
            $lastid = $jobs_id;
            $file = $req->file('job_img');
            $ext = $lastid.'_'.$file->getClientOriginalName();
            $file->move('job-profile-img/', $ext);
        }
        if($job_title == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Job title Cannot be empty!!');
        }
        if($job_description == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Job Description Cannot be empty!!');
        }
        if($working_type == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Working type Cannot be empty!!');
        }
        if($job_type == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Job type Cannot be empty!!');
        }
        if($carrer_level == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Carrer level Cannot be empty!!');
        }
        if($experience == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Experience Cannot be empty!!');
        }
        if($qualification == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Qualification Cannot be empty!!');
        }
        if($gender == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Gender Cannot be empty!!');
        }
        if($deadline == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Deadline Cannot be empty!!');
        }
        if($country == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Country Cannot be empty!!');
        }
        if($city == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'City Cannot be empty!!');
        }
        if($address == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Address Cannot be empty!!');
        }
        if((string)$req->input('job_requirement1') == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'Insert at Least One Requirement!!');
        }
        echo (string)$req->input('job_key_skill2');
        if((string)$req->input('job_key_skill1') == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'At least 3 skills are Required!!');
        }
        if((string)$req->input('job_key_skill2') == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'At least 3 skills are Required!!');
        }
        if((string)$req->input('job_key_skill3') == "") {
            return redirect('company-manage-jobs-edit'.$jobs_id)->with('error', 'At least 3 skills are Required!!');
        }
        
        $job = Jobs::find($jobs_id);
        $job->job_title = $job_title;
        if($req->hasFile('job_img')){
            $job->job_img = $ext;
        }
        $job->job_description = $job_description;
        $job->working_type = $working_type;
        $job->industry = $industry;
        $job->job_type = $job_type;
        $job->carrer_level = $carrer_level;
        $job->experience = $experience;
        $job->qualification = $qualification;
        $job->gender = $gender;
        $job->deadline = $deadline;
        $job->country = $country;
        $job->city = $city;
        $job->address = $address;
        $job->save();
        
        //$jobs_id = Jobs::latest()->get('jobs_id')->first()->jobs_id;
        JobRequirements::where('jobs_id', $jobs_id)->delete();
        for($i = 1; $i < 9; $i++) {
            if($req->input('job_requirement'.$i) == "") {
                continue;
            }
            $job_req = new JobRequirements;
            $job_req->jobs_id = $jobs_id;
            $job_req->requirement = (string)$req->input('job_requirement'.$i);
            $job_req->save();
        }

        JobKeySkills::where('jobs_id', $jobs_id)->delete();
        for($i = 1; $i < 11; $i++) {
            if($req->input('job_key_skill'.$i) == "") {
                continue;
            }

            $job_key_skills = new JobKeySkills;
            $job_key_skills->jobs_id = $jobs_id;
            $job_key_skills->skill = (string)$req->input('job_key_skill'.$i);
            $job_key_skills->save();
        }

        return redirect('company-manage-jobs')->with('status', 'Successfully Updated the '. $job_title.' Job!!');

    }
    public function companyManageApplicationFilter($job_id) {
        $data = JobApplications::where('jobs_id', $job_id)->get();
        return view('company-manage-applications', ['data'=>$data]);
    }

    public function companyChangePassword(Request $req){
        $old_password = $req->input('old_password');
        $new_password = $req->input('new_password');
        $c_password = $req->input('c_password');

        if($old_password == "" || $new_password == "" || $c_password == "") {
            return redirect('company-change-password')->with('error', 'You cannot keep fields empty!!');
        }
        if($new_password != $c_password) {
            return redirect('company-change-password')->with('error', 'New passwords does not matches!!');
        }

        $username = $req->session()->get('companyUser');
        
        $check = CompanyUser::where([
            ['username', '=', $username],
            ['password', '=', $old_password]
        ])->count();

        if($check == 1) {
            $id = CompanyUser::where('username', $username)->get('company_users_id')[0]->company_users_id;
            $c_user = CompanyUser::find($id);
            $c_user->password = $new_password;
            $c_user->save();
            return redirect('company-change-password')->with('success', 'Password updated Successfully!!');
        }else {
            return redirect('company-change-password')->with('error', 'Old password is wrong!!');
        }

        //return view('company-change-password');
    }

    public function companyUpdateStatus(Request $req, $job_application_id)  {
        $status =  $req->input('status');
        echo $status;
        if($status == "status") {
            return redirect('company-manage-applications')->with('error', 'Select Appropriate Value!!');
        }
        $job_application = JobApplications::find($job_application_id);
        $job_application->status = $status;
        $job_application->save();

        return redirect()->back()->with('status', 'Application Status updated Successfully!!');
    }

    public function companyDashboard() {
        $total_jobs = Jobs::all()->count();
        $total_applications = JobApplications::all()->count();
        $bookmark = JobApplications::where('bookmark', true)->get()->count();
        $notifications = Notifications::where('seen', false)->limit(10)->latest()->get();
        $data = [
            'total_jobs'  => $total_jobs,
            'total_applications'   => $total_applications,
            'bookmark' => $bookmark,
            'notifications' => $notifications
        ];
        return view('company-dashboard', ['data' => $data]);
    }

    public function companyAllCandidates(Request $req) {
        $data = CandidateUser::orderBy('candidate_id', 'DESC')->get();
        return view('company-all-candidates', ['data' => $data]);
    }

    public function companyViewJobberProfile($candidate_id) {
        $data = CandidateUser::find($candidate_id);
        return view('company-view-jobber-profile', ['data' => $data]);
    }

    public function companyAllSubscribers() {
        $data = Subscribers::orderBy('subscribers_id', 'DESC')->get();
        return view('company-all-subscribers', ['data' => $data]);
    }

    public function updateNotification(Request $req, $notification_id) {
        $noti = Notifications::find($notification_id);
        $noti->seen = true;
        $noti->save();
        return redirect('company-dashboard')->with('status', 'Notification seen Successfully!!');
    }
}
