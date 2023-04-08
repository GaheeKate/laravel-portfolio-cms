<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function list()
    {
        return view('jobs.list', [
            'jobs' => Job::all()
        ]);
    }
}
