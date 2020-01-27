<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $data['experiences'] = Experience::all();
        return view('experiences.index', $data);
    }

    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'company' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'desc' => 'required'
            ]
        );

        $experience = new Experience();
        $experience->title = $request->title;
        $experience->company = $request->company;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->desc = $request->desc;
        $experience->save();

        return redirect('/experiences')->with('message', 'Experience Inserted');
    }

    public function edit($id)
    {
        $data['experience'] = Experience::findOrFail($id);

        return view('experiences.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'company' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'desc' => 'required'
            ]
        );

        $experience = Experience::find($request->id);
        $experience->title = $request->title;
        $experience->company = $request->company;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->desc = $request->desc;
        $experience->update();

        return redirect('/experiences')->with('message', 'Experience Updated');
    }

    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();

        return redirect('/experiences')->with('message', 'Experience Deleted');
    }
}
