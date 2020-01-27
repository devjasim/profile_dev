<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $data['skills'] = Skill::all();
        return view('skills.index', $data);
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'skill' => 'required|string',
                'percantage' => 'required'
            ]
        );

        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->percantage = $request->percantage;
        $skill->save();

        return redirect('/skills')->with('message', 'Skill Inserted');
    }

    public function edit($id)
    {
        $data['skill'] = Skill::findOrFail($id);

        return view('skills.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'skill' => 'required|string',
                'percantage' => 'required'
            ]
        );

        $skill = Skill::find($request->id);
        $skill->skill = $request->skill;
        $skill->percantage = $request->percantage;
        $skill->update();

        return redirect('/skills')->with('message', 'Skill Updated');
    }

    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();

        return redirect('/skills')->with('message', 'Skill Deleted');
    }
}
