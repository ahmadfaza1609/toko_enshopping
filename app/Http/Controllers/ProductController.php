<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
	    return view('pages.admin.product.index', ['product' => $product]);
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
        $dtUpload->category_id = $request->category_id;
        $dtUpload->link_shoope = $request->link_shoope;
        $dtUpload->link_tokped = $request->link_tokped;
        $dtUpload->link_lazada = $request->link_lazada;


        $nm->move(public_path().'/data_photo', $namaFile);
        // $dtUpload->save;

        $file = Product::create([
            'title'=> $dtUpload->title,
            'description'=> $dtUpload->description,
            'stock'=>$dtUpload->stock,
            'price'=>$dtUpload->price,
            'photo'=>$dtUpload->photo,
            'category_id'=>$dtUpload->category_id,
            'link_shoope'=>$dtUpload->link_shoope,
            'link_tokped'=>$dtUpload->link_tokped,
            'link_lazada'=>$dtUpload->link_lazada

        ]);
        // $product = DB::table('product')
        // ->leftJoin('category_product', 'product.category_id', '=', 'category_product.id')
        // ->get();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $nm = $request->photo;
        $namaFile = $nm->getClientOriginalName();

        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->photo = $namaFile;
        $product->category_id = $request->category_id;
        $product->link_shoope = $request->link_shoope;
        $product->link_tokped = $request->link_tokped;
        $product->link_lazada = $request->link_lazada;

        $nm->move(public_path().'/data_photo', $namaFile);

        $product->save();

        return redirect('product')->with('succes', 'Product berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
    //   * @param  int $id
       * @param  \App\Models\Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
        // dd($id);
        Product::destroy($id->id);
        return redirect('product')->with('succes', 'Product berhasil dihapus');
    }
}
