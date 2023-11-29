<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OderAdminController extends Controller
{
    public function list()
    {
            $data = Order::all();
            return view('admin.carts.customer',['title' => 'Danh sách đơn đặt hàng'],['customers'=>$data]);
        
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('admin/sliders/list');
    }
}
