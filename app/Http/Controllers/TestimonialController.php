<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    public function index()
    {
        $data['testimonials'] = Testimonial::all();
        return view('testimonials.index', $data);
    }

    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'designation' => 'required',
                'desc' => 'required',
                'image' => 'required'
            ]
        );

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->desc = $request->desc;

        //upload Image
        if($request->hasFile('image')){
            $image_tmp = $request->image;
            if($image_tmp->isValid()){
                $extenson = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extenson;
                    $image_path = 'assets/images/'.$filename;

                    //Resize Image and Save
                    Image::make($image_tmp)->resize(80,80)->save($image_path);
                    $testimonial->image = $filename;
            }
        }
        $testimonial->save();

        return redirect('/testimonials')->with('message', 'Testimonial Inserted');
    }

    public function edit($id)
    {
        $data['testimonial'] = Testimonial::findOrFail($id);

        return view('testimonials.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'designation' => 'required',
                'desc' => 'required',
            ]
        );

        $testimonial = Testimonial::find($request->id);
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->desc = $request->desc;

        //update image
        if($request->hasFile('image')){
            $img = 'assets/images/'.$testimonial->image;
            if(file_exists($img)){
                unlink($img);
            }
            $image_tmp = $request->image;
            if($image_tmp->isValid()){
                $extenson = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extenson;
                $image_path = 'assets/images/'.$filename;

                //Resize Image and Save
                Image::make($image_tmp)->resize(400,400)->save($image_path);

                //store image in table
                $testimonial->image = $filename;
            }
        }

        $testimonial->update();

        return redirect('/testimonials')->with('message', 'Testimonial Updated');
    }

    public function destroy($id)
    {
        Testimonial::findOrFail($id)->delete();

        return redirect('/testimonials')->with('message', 'Testimonial Deleted');
    }
}
