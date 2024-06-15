<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobTimeType;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    public function index(Request $request)
    {
        $jobCategoryId = Request()->input("job_category_id");
        $jobTimeType = Request()->input("job_time_type_id");
        $rangeStart = Request()->input("range_start");
        $rangeEnd = Request()->input("range_end");
        $job_category = JobCategory::all();
        $job_time = JobTimeType::all();
        $configurations = Configuration::first();
        $keyword = $request->input("keyword");

        $jobEloquent = Job::with('jobTime', 'company', 'jobcategory');
        if ($jobCategoryId) {
            $jobEloquent->where("job_category_id", $jobCategoryId);
        }

        if ($jobTimeType) {
            $jobEloquent->where("job_time_type_id", $jobTimeType);
        }

        if ($keyword) {
            $jobEloquent->where('title', 'LIKE', '%' . $keyword . '%');
        }
        $jobs = $jobEloquent->paginate(7);
        $totalJob = $jobEloquent->count();

        $data = ([
            "job_category" => $job_category,
            "job_time" => $job_time,
            "jobs" => $jobs,
            "totalJob" => $totalJob,
            'jobCategoryId' => $jobCategoryId,
            "jobTimeType" => $jobTimeType,
            "rangeStart" => $rangeStart,
            "rangeEnd" => $rangeEnd,
            "configurations" => $configurations,
            "title" => "Get Your Job",
            "keyword" => $keyword,
        ]);

        return view('job-seekers.job-listing', $data);


    }

    public function showJobsByCategory($id)
    {
        $categories = JobCategory::findOrFail($id);

        $jobs = Job::where('job_category_id', $id)->get();
        $jobCategoryId = Request()->input("job_category_id");
        $job_category = JobCategory::all();
        $job_time = JobTimeType::all();

        $jobTimeType = Request()->input("job_time_type_id");
        $totalJob = $jobs->count();

        // $job = Job::findOrFail($id);

        // $company = $jobs[0]->company; // Mendapatkan informasi perusahaan terkait
        // $logoUrl = null;

        // if ($company && $company->logo) {
        //     $logoUrl = asset('storage/' . $company->logo);
        // }
        $data = ([
            "job_category" => $job_category,
            "job_time" => $job_time,
            "categories" => $categories,
            "jobs" => $jobs,
            "totalJob" => $totalJob,
            "jobCategoryId" => $jobCategoryId,
            "jobTimeType" => $jobTimeType,
            "title" => "Get Your Job"
        ]);
        return view('job-seekers.job-listing', $data);
    }

}