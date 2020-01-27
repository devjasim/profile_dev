<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $data['socials'] = Social::all();
        return view('socials.index', $data);
    }

    public function create()
    {
        return view('socials.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'icon' => 'required',
                'link' => 'required',
            ]
        );

        $social = new Social();
        $social->icon = $request->icon;
        $social->link = $request->link;
        $social->save();

        return redirect('/socials')->with('message', 'Social Inserted');
    }

    public function edit($id)
    {
        $data['social'] = Social::findOrFail($id);

        return view('socials.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'icon' => 'required',
                'link' => 'required',
            ]
        );

        $social = Social::find($request->id);
        $social->icon = $request->icon;
        $social->link = $request->link;
        $social->update();

        return redirect('/socials')->with('message', 'Social Updated');
    }

    public function destroy($id)
    {
        Social::findOrFail($id)->delete();

        return redirect('/socials')->with('message', 'Social Deleted');
    }
}
