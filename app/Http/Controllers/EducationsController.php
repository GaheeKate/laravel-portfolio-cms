<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }


    public function addForm()
    {

        return view('educations.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'school' => 'required',
            'type' => 'nullable',
            'course' => 'nullable',
            'started' => 'nullable',
            'finished' => 'nullable',
        ]);

        $education = new Education();
        $education->school = $attributes['school'];
        $education->type = $attributes['type'];
        $education->course = $attributes['course'];
        $education->started = $attributes['started'];
        $education->finished = $attributes['finished'];

        $education->save();


        return redirect('/console/educations/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('educations.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'school' => 'required',
            'type' => 'nullable',
            'course' => 'nullable',
            'started' => 'nullable',
            'finished' => 'nullable',
        ]);

        $education->school = $attributes['school'];
        $education->type = $attributes['type'];
        $education->course = $attributes['course'];
        $education->started = $attributes['started'];
        $education->finished = $attributes['finished'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {
        $education->delete();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');
    }
}
