<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use Image;

class GeneralInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['geninfo'] = GeneralInfo::first() ? GeneralInfo::first() : [];
        return view('gen_info.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => 'required',
                "designation" => 'required',
                "short_desc" => 'required',
                "desc" => 'required',
                "location" => 'required',
                "birthday" => 'required',
                "skill_desc" => 'required',
                "email" => 'required',
                "phone" => 'required',
            ]
        );

        $info = GeneralInfo::first();

        if($info){
            $info->name = $request->name;
            $info->designation = $request->designation;
            $info->short_desc = $request->short_desc;
            $info->desc = $request->desc;
            $info->location = $request->location;
            $info->birthday = $request->birthday;
            $info->skill_desc = $request->skill_desc;
            $info->email = $request->email;
            $info->phone = $request->phone;

            //update image
            if($request->hasFile('image')){
                $img = 'assets/images/'.$info->image;
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
                    $info->image = $filename;
                }
            }

            //update image
            if($request->hasFile('cv')){
                $old_cv = 'assets/images/'.$info->cv;
                if(file_exists($old_cv)){
                    unlink($old_cv);
                }
                $cv_name = rand(111,99999).'.'.$request->cv->extension();
                $request->cv->move('assets/images/', $cv_name);
                $info->cv = $cv_name;
            }

            $info->update();
        }else{
            $request->validate(
                [
                    "image" => 'required',
                    "cv" => 'required'
                ]
            );
            $gen_info = new GeneralInfo();
            $gen_info->name = $request->name;
            $gen_info->designation = $request->designation;
            $gen_info->short_desc = $request->short_desc;
            $gen_info->desc = $request->desc;
            $gen_info->location = $request->location;
            $gen_info->birthday = $request->birthday;
            $gen_info->skill_desc = $request->skill_desc;
            $gen_info->email = $request->email;
            $gen_info->phone = $request->phone;

             //upload image
             if($request->hasFile('image')){
                $image_tmp = $request->image;
                if($image_tmp->isValid()){
                    $extenson = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extenson;
                    $image_path = 'assets/images/'.$filename;

                    //Resize Image and Save
                    Image::make($image_tmp)->resize(400,400)->save($image_path);

                    //store image in table
                    $gen_info->image = $filename;
                }
            }

            //upload cv
            if($request->hasFile('cv')){
                $cv_name = rand(111,99999).'.'.$request->cv->extension();
                $request->cv->move('assets/images/', $cv_name);
                $gen_info->cv = $cv_name;
            }

            $gen_info->save();
        }

        return redirect(route('gen_info.index'));
    }
}
