<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderItem;
use Auth; 
use Image;

class AdminordersController extends Controller
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
        $orders = DB::table('orders')->get();
        return view('orders.index', ['order' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'user_id' => 'required',
            'status' => 'status',
            'total_price' => 'required|numeric',
            'address' => 'required',
            'address_line2' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->status = $request->post('status');
        $order->total_price = $request->post('total_price');
        $order->address = $request->post('address');
        $order->address_line2 = $request->post('address_line2');
        $order->district = $request->post('district');
        $order->city = $request->post('city');
        $order->province = $request->post('province');
        $order->zip_code = $request->post('zip_code');
        $order->phone_number = $request->post('phone_number');
        $order->total_price = $total_price;
        $order->save();

        return redirect('/orderssadmin')->with('success', 'Produk Berhasil di Simpan');
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
        $orders = DB::table('orders')->where('id',$id)->get();

        return view('orders.edit',['order' => $orders]);
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
        DB::table('orders')->where('id',$request->id)->update([
            'user_id' => $request->user_id,
            'status' => $request->status,
            'total_price' => $request->total_price,
            'address' => $request->address,
            'address_line2' => $request->address_line2,
            'district' => $request->district,
            'city' => $request->city,
            'province' => $request->province,
            'zip_code' => $request->zip_code,
            'phone_number' => $request->phone_number,
        ]);

        return redirect('/ordersadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('orders')->where('id', $id)->delete();

        return redirect ('/ordersadmin');
    }
}
