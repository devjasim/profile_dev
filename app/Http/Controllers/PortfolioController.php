<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    public function index()
    {
        $data['portfolios'] = Portfolio::all();
        return view('portfolios.index', $data);
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'category' => 'required',
                'title' => 'required',
                'link' => 'required',
                'image' => 'required'
            ]
        );

        $portfolio = new Portfolio();
        $portfolio->category = $request->category;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;

        //upload Image
        if($request->hasFile('image')){
            $image_tmp = $request->image;
            if($image_tmp->isValid()){
                $extenson = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extenson;
                    $image_path = 'assets/images/'.$filename;

                    //Resize Image and Save
                    Image::make($image_tmp)->resize(600,400)->save($image_path);
                    $portfolio->image = $filename;
            }
        }
        $portfolio->save();

        return redirect('/portfolios')->with('message', 'Portfolio Inserted');
    }

    public function edit($id)
    {
        $data['portfolio'] = Portfolio::findOrFail($id);

        return view('portfolios.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'category' => 'required',
                'title' => 'required',
                'link' => 'required',
            ]
        );

        $portfolio = Portfolio::find($request->id);
        $portfolio->category = $request->category;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;

        //update image
        if($request->hasFile('image')){
            $img = 'assets/images/'.$portfolio->image;
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
                $portfolio->image = $filename;
            }
        }

        $portfolio->update();

        return redirect('/portfolios')->with('message', 'portfolio Updated');
    }

    public function destroy($id)
    {
        Portfolio::findOrFail($id)->delete();

        return redirect('/portfolios')->with('message', 'portfolio Deleted');
    }
}
