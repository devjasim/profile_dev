<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::all();
        return view('blogs.index', $data);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'tag' => 'required',
                'title' => 'required',
                'link' => 'required',
                'image' => 'required'
            ]
        );
        $blog = new Blog();
        $blog->tag = $request->tag;
        $blog->title = $request->title;
        $blog->link = $request->link;
        //upload Image
        if($request->hasFile('image')){
            $image_tmp = $request->image;
            if($image_tmp->isValid()){
                $extenson = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extenson;
                    $image_path = 'assets/images/'.$filename;

                    //Resize Image and Save
                    Image::make($image_tmp)->resize(600,400)->save($image_path);
                    $blog->image = $filename;
            }
        }
        $blog->save();
        return redirect('/blogs')->with('message', 'Blog Inserted');
    }

    public function edit($id)
    {
        $data['blog'] = Blog::findOrFail($id);
        return view('blogs.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'tag' => 'required',
                'title' => 'required',
                'link' => 'required',
            ]
        );
        $blog = Blog::find($request->id);
        $blog->tag = $request->tag;
        $blog->title = $request->title;
        $blog->link = $request->link;
        //update image
        if($request->hasFile('image')){
            $img = 'assets/images/'.$blog->image;
            if(file_exists($img)){
                unlink($img);
            }
            $image_tmp = $request->image;
            if($image_tmp->isValid()){
                $extenson = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extenson;
                $image_path = 'assets/images/'.$filename;

                //Resize Image and Save
                Image::make($image_tmp)->resize(600,400)->save($image_path);

                //store image in table
                $blog->image = $filename;
            }
        }
        $blog->update();
        return redirect('/blogs')->with('message', 'Blog Updated');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect('/blogs')->with('message', 'Blog Deleted');
    }
}
