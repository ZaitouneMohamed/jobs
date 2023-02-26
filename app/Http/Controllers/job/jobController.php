<?php

namespace App\Http\Controllers\job;

use App\Http\Controllers\Controller;
use App\Models\annonce;
use App\Models\user_annonce;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function job_details($id)
    {
        $job = annonce::find($id);
        $job->increment('visits');
        return view('job.job_detail',compact("job"));
    }

    public function apply_job(Request $request) {
        user_annonce::create([
            "annonce_id" => $request->annonce_id,
            "user_id" => auth()->user()->id,
            "pending" => '1'
        ]);
        return redirect()->route('index');
    }
}
