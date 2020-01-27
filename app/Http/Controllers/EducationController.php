<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $data['educations'] = Education::all();
        return view('educations.index', $data);
    }

    public function create()
    {
        return view('educations.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'institute' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'desc' => 'required'
            ]
        );

        $education = new Education();
        $education->title = $request->title;
        $education->institute = $request->institute;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->desc = $request->desc;
        $education->save();

        return redirect('/educations')->with('message', 'education Inserted');
    }

    public function edit($id)
    {
        $data['education'] = Education::findOrFail($id);

        return view('educations.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'institute' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'desc' => 'required'
            ]
        );

        $education = Education::find($request->id);
        $education->title = $request->title;
        $education->institute = $request->institute;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->desc = $request->desc;
        $education->update();

        return redirect('/educations')->with('message', 'Education Updated');
    }

    public function destroy($id)
    {
        Education::findOrFail($id)->delete();

        return redirect('/educations')->with('message', 'Education Deleted');
    }
}
