<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $youtube = Youtube::all();
	    return view('pages.admin.index', ['youtube' => $youtube]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'link' => 'required',
            'status' => 'required',
          ]);
          $input = $request->all();

          $yt = Youtube::create($input);
          return back()->with('success',' Post baru berhasil dibuat.');
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
   //  * @param  int  $id
     * @param  \App\Models\Product

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $yt = Youtube::find($id);
        return view('pages.admin.edit', ['youtube'=>$yt]);
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
        $request->validate([
            'link' => 'required',
            'status' => 'required',
          ]);

         $yt = Youtube::find($id)->update($request->all());

         return redirect('/admin')->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Youtube
     * @return \Illuminate\Http\Response
     */
    public function destroy(Youtube $id)
    {
        Youtube::destroy($id->id);
        return redirect('/admin')->with('succes', 'Product berhasil dihapus');
    }
}
