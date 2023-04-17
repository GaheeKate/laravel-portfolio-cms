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
    public function addForm()
    {

        return view('jobs.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'workplace' => 'required',
            'title' => 'nullable',
            'address' => 'nullable',
            'description' => 'nullable',
            'started' => 'nullable',
            'finished' => 'nullable',
        ]);

        $job = new Job();
        $job->workplace = $attributes['workplace'];
        $job->title = $attributes['title'];
        $job->address = $attributes['address'];
        $job->description = $attributes['description'];
        $job->started = $attributes['started'];
        $job->finished = $attributes['finished'];
        $job->save();

        return redirect('/console/jobs/list')
            ->with('message', 'Job has been added!');
    }

    public function editForm(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    public function edit(Job $job)
    {

        $attributes = request()->validate([
            'workplace' => 'required',
            'title' => 'nullable',
            'address' => 'nullable',
            'description' => 'nullable',
            'started' => 'nullable',
            'finished' => 'nullable',
        ]);


        $job->workplace = $attributes['workplace'];
        $job->title = $attributes['title'];
        $job->address = $attributes['address'];
        $job->description = $attributes['description'];
        $job->started = $attributes['started'];
        $job->finished = $attributes['finished'];
        $job->save();

        return redirect('/console/jobs/list')
            ->with('message', 'Job has been edited!');
    }

    public function delete(Job $job)
    {
        $job->delete();

        return redirect('/console/jobs/list')
            ->with('message', 'Job has been deleted!');
    }
}
