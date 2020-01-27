<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::all();
        return view('services.index', $data);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'icon' => 'required',
                'title' => 'required',
                'desc' => 'required'
            ]
        );

        $service = new Service();
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->desc = $request->desc;
        $service->save();

        return redirect('/services')->with('message', 'service Inserted');
    }

    public function edit($id)
    {
        $data['service'] = Service::findOrFail($id);

        return view('services.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'icon' => 'required',
                'title' => 'required',
                'desc' => 'required'
            ]
        );

        $service = Service::find($request->id);
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->desc = $request->desc;
        $service->update();

        return redirect('/services')->with('message', 'Service Updated');
    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();

        return redirect('/services')->with('message', 'Service Deleted');
    }
}
