<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class OderAdminController extends Controller
{
    public function list()
    {
           // $data = Order::all();
            $users = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')->get();
            return view('admin.carts.customer',['title' => 'Danh sách đơn đặt hàng'],['customers'=>$users]);
        
    }
    public function show()
    {
        //$product = Product::all();
        $users = DB::table('orders')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->join('products','orders.product_id', '=', 'products.id')->first();
        return view('admin.carts.detail',['title' => 'Danh sách đơn đặt hàng'],['customer'=>$users]);
        
    }
    // public function showProduct() {
    //     $product = Product::all();
    //     return view('admin.carts.detail',['title' => 'Danh sách đơn đặt hàng'],['products'=>$product]);
        
        
    // }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('admin/sliders/list');
    }
}
