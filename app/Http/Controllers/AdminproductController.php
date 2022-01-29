<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Auth; 
use Image;

class AdminproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index()
    {
        $products = DB::table('products')->get();
        return view('admin.products.index', ['product' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric',
            'description' => 'required',
            'id_category' => 'required',
            'status' => 'required',
        ]);

        $file = $request->file('image_url');

        $product = new Product();
        $product->name = $request->post('name');
        $product->id_category = $request->post('id_category');
        $product->price = $request->post('price');
        $product->description = $request->post('description');
        $product->status = $request->post('status');
        $product->image_url = $request->post('image_url');
        $product->save();

        return redirect('/productsadmin')->with('success', 'Produk Berhasil di Simpan');
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
        $products = DB::table('products')->where('id',$id)->get();

        return view('admin.products.editproduct',['product' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('products')->where('id',$request->id)->update([
            'name' => $request->name,
            'id_category' => $request->id_category,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'image_url' => $request->image_url
        ]);

        return redirect('/productsadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect ('/productsadmin');
    }
}
