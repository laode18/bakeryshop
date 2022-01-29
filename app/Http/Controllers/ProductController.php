<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Models\Reviews;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $slug)
    {
        $productsInstance = new Product();
        $products = $productsInstance->orderProducts($request->get('order_by'));

        if ($request->ajax()) {
            return response()->json($products, 200);
        }

        if(Category::where('slug', $slug)->exists())
        {
            $category = Category::where('slug', $slug)->first();   
            $products = Product::where('id_category', $category->id)->where('status', '0')->get();
            return view('product', compact('category','products'));
        }
        else{
            return redirect('/productcategory')->with('status', 'Slug doesnt exists');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $review = Reviews::with('user')->get();
        $productRating = Reviews::avg('rating');
        if ($product) {
            return view('review', compact('product', 'review', 'productRating'));
        }else {
            return redirect('/product/{slug}')->with('errors', 'Produk tidak ditemukan');
        }
    }

    public function image($imageName)
    {
        $filePath = storage_path(env('PATH_IMAGE').'products/'.$imageName);
        return Image::make($filePath)->response();
    }

    public function storeReview(Request $request, $product_id)
    {
        $this->validate(request(), [
            'rating' => 'required',
            'description' => 'required'
        ]);

        $review = new Reviews();
        $review->user_id = Auth::user()->id;
        $review->rating = $request->post('rating');
        $review->description = $request->post('description');
        $review->product_id = $product_id;

        $review->save();

        return redirect('/product/show/' . $product_id);
    }

    public function getReview($product_id)
    {
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
    public function destroy($id)
    {
        //
    }
}
