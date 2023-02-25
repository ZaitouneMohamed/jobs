<?php

namespace App\Http\Controllers\job;

use App\Http\Controllers\Controller;
use App\Models\annonce;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function job_details($id)
    {
        $job = annonce::find($id);
        $job->increment('visits');
        return view('job.job_detail',compact("job"));
    }
}
