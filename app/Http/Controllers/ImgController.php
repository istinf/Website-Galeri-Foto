<?php

namespace App\Http\Controllers;

use App\Models\GallaryImage;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $data)
    {
        $data = GallaryImage::all();
        return view('home')->with('data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'caption' => 'required|max:255',
        'category' => 'required', 
        'image' => 'required|image|mimes:png,jpg,jpeg,bmp',
    ],[
        'category.required' => 'Please select a category',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload_images'), $imageName);
    } else {
        return redirect()->back()->withInput()->withErrors(['image' => 'Image file is required']);
    }

    GallaryImage::create([
        'user_id' => Auth::user()->id,
        'caption' => $request->get('caption'),
        'category' => $request->get('category'),
        'image' => $imageName,
        'tglUpdate' => $request->get('tglUpdate'),
    ]);
    Alert::success('Success Title', 'Success Message');
    return redirect()->route('home')->with('success', 'Image created successfully!');
}

public function detailImage(Request $request, $id){
    $data = GallaryImage::findOrFail($id);
    $category = GallaryImage::where('category', $data->category)->get();
    return view('detail', compact('data', 'category'));
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(GallaryImage $image)
    {
        $image->delete();
        return redirect()->route('home');
    }

}
