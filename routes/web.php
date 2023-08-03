<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jobber;
use GuzzleHttp\Psr7\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//          company/admin

Route::get('/', [Home::class, 'homeJobs']);

//Route::view('/', 'dashboard-packages');

Route::get('admin', function() {
    return redirect('/company-signin');
});

Route::get('/signin', function () {
    return view('login');
});

Route::view('/signup', 'signup');

Route::view('/company-signin', 'company-signin');

Route::view('/company-signup', 'company-signup');

Route::post('/company-signup-check', [Company::class, 'signup']);

Route::post('/company-signin-check', [Company::class, 'signin']);

Route::get('/company-dashboard', [Company::class, 'companyDashboard']);

Route::view('/company-post-job', 'company-post-job');

Route::get('/company-profile', [Company::class, 'companyProfileDetails']);

Route::post('/company-profile-update', [Company::class, 'companyProfileUpdate']);

Route::get('/company-logout', [Company::class, 'companyLogout']);

Route::post('/insert-job-post', [Company::class, 'insertJobs']);

Route::get('/company-manage-applications', [Company::class, 'companyManageApplications']);

Route::get('/company-unbookmark-application{id}', [Company::class, 'companyUnbookmarkApplication']);

Route::get('/company-bookmark-application{id}', [Company::class, 'companyBookmarkApplication']);

Route::get('/company-bookmark-resume', [Company::class, 'companyBookmarkResume']);

Route::get('/company-manage-jobs', [Company::class, 'companyManageJobs']);

Route::get('/company-manage-jobs-edit{job_id}', [Company::class, 'companyManageJobsEdit']);

Route::post('/company-job-update', [Company::class, 'companyJobUpdate']);

Route::get('/company-manage-application-filter{job_application_id}', [Company::class, 'companyManageApplicationFilter']);

Route::view('/company-change-password', 'company-change-password');

Route::post('/company-change-password-check', [Company::class, 'companyChangePassword']);

Route::get('/company-update-status{job_application_id}', [Company::class, 'companyUpdateStatus']);

Route::get('/company-all-candidates', [Company::class, 'companyAllCandidates']);

Route::get('/company-view-jobber-profile{candidate_id}', [Company::class, 'companyViewJobberProfile']);

Route::get('/company-all-subscribers', [Company::class, 'companyAllSubscribers']);

Route::get('/update-notification{notification_id}', [Company::class, 'updateNotification']);




//               home 

Route::get('/job-detail{id}', [Home::class, 'jobDetails']);

Route::view('/job-detail', 'job-detail');

Route::get('/job-search', [Jobber::class, 'jobSearch']);

Route::get('/job-apply{job_id}', [Jobber::class, 'jobApply']);

Route::get('/job-searching', [Jobber::class, 'jobSearching']);

Route::get('/insert_subscribers', [Home::class, 'insertSubscribers']);

Route::view('/blog', 'blogging');

Route::view('/about-us', 'about-us');

Route::view('/contact', 'contact');

Route::view('/privacy', 'privacy');

Route::view('/faq', 'faq');

Route::get('/insert-contactus', [Home::class, 'insertContactus']);




//              jobber

Route::view('/jobber-signin', 'jobber-signin');

Route::view('/jobber-signup', 'jobber-signup');

Route::post('/jobber-signup-check', [Jobber::class, 'jobberSignupCheck']);

Route::post('/jobber-signin-check', [Jobber::class, 'jobberSigninCheck']);

Route::get('/jobber-logout', [Jobber::class, 'jobberLogout']);

Route::get('/jobber-logout-inside', [Jobber::class, 'jobberLogoutInside']);

Route::get('/jobber-dashboard-chk', function() {
    if(session('jobberUser')) {
        return redirect('/jobber-dashboard');
    }else{
        return redirect()->back()->with('error', 'Please Sign in first!!');
    }
});

Route::get('/jobber-bookmarks', [Jobber::class, 'jobberBookmarks']);

Route::get('/jobber-dashboard', [Jobber::class, 'jobberDashboard']);

Route::get('/jobber-applied-jobs', [Jobber::class, 'jobberAppliedJobs']);

Route::get('/jobber-bookmark{job_applications_id}', [Jobber::class, 'jobberBookmark']);

Route::get('/jobber-unbookmark{job_applications_id}', [Jobber::class, 'jobberUnbookmark']);

Route::get('/jobber-profile', [Jobber::class, 'jobberProfile']);

Route::get('/jobber-update-profile{candidate_id}', [Jobber::class, 'jobberUpdateProfile']);

Route::view('/jobber-change-password', 'jobber-change-password');

Route::post('/jobber-change-password-check', [Jobber::class ,'jobberChangePasswordCheck']);

Route::get('/jobber-create-resume', [Jobber::class, 'jobberCreateResume']);

Route::get('/jobber-resume-profile', [Jobber::class, 'jobberResumeProfile']);

Route::get('/jobber-manage-resume', [Jobber::class, 'jobberManageResume']);

Route::get('/jobber-update-resume', [Jobber::class, 'jobberUpdateResume']);

Route::get('/jobber-alert', [Jobber::class, 'jobberAlert']);

Route::get('/jobber-set-job-alert', [Jobber::class, 'jobberSetJobAlert']);

