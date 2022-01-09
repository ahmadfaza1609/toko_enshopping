<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $nm = $request->photo;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Product;
        $dtUpload->title = $request->title;
        $dtUpload->description = $request->description;
        $dtUpload->stock = $request->stock;
        $dtUpload->price = $request->price;
        $dtUpload->photo = $namaFile;
        $dtUpload->link = $request->link;


        if ($dtUpload->data_text == null) {
            $dtUpload->data_text = "none";
        }

        $nm->move(public_path().'/data_photo', $namaFile);
        // $dtUpload->save;

        $file = Product::create([
            'title'=> $dtUpload->title,
            'description'=> $dtUpload->description,
            'stock'=>$dtUpload->stock,
            'price'=>$dtUpload->price,
            'photo'=>$dtUpload->photo,
            'link'=>$dtUpload->link
        ]);
        return view('show', compact('file'));
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
    public function edit()
    {
        return view('pages.admin.product.update');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete();

    }
}
