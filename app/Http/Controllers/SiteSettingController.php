<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Image;

class SiteSettingController extends Controller
{
    public function index()
    {
        $data['setting'] = SiteSetting::first() ? SiteSetting::first() : [];
        return view('setting.index', $data);
    }

    public function store(Request $request)
    {
        $site_setting = SiteSetting::first();

        if($site_setting){
            $site_setting->title = $request->title;
            $site_setting->keyword = $request->keyword;
            $site_setting->description = $request->description;
            $site_setting->subject = $request->subject;
            $site_setting->copyright = $request->copyright;
            $site_setting->author = $request->author;
            $site_setting->owner = $request->owner;
            $site_setting->reply_to = $request->reply_to;
            $site_setting->url = $request->url;

            //update image
            if($request->hasFile('favicon')){
                $img = 'assets/images/'.$site_setting->favicon;
                if(file_exists($img)){
                    unlink($img);
                }
                $image_tmp = $request->favicon;
                if($image_tmp->isValid()){
                    $extenson = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extenson;
                    $image_path = 'assets/images/'.$filename;

                    //Resize Image and Save
                    Image::make($image_tmp)->resize(32,32)->save($image_path);

                    //store image in table
                    $site_setting->favicon = $filename;
                }
            }

            $site_setting->update();
        }else{
            $setting = new SiteSetting();
            $setting->title = $request->title;
            $setting->keyword = $request->keyword;
            $setting->description = $request->description;
            $setting->subject = $request->subject;
            $setting->copyright = $request->copyright;
            $setting->author = $request->author;
            $setting->owner = $request->owner;
            $setting->reply_to = $request->reply_to;
            $setting->url = $request->url;

             //upload image
             if($request->hasFile('favicon')){
                $image_tmp = $request->favicon;
                if($image_tmp->isValid()){
                    $extenson = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extenson;
                    $image_path = 'assets/images/'.$filename;

                    //Resize Image and Save
                    Image::make($image_tmp)->resize(32,32)->save($image_path);

                    //store image in table
                    $setting->favicon = $filename;
                }
            }

            $setting->save();
        }

        return redirect(route('site_setting.index'));
    }
}
