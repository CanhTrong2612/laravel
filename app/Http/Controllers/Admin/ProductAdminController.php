<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function index()
    {
        return view('admin.product.add',[
            'title' => 'thêm sản phẩm'
         ]);
    }
    public function addProduct(Request $req)
    {
        $product = new Product;
        $product->name = $req->name;
        $product->category = $req->danhmuc;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->gallery = $req->thumb;
        $product->save();
        return redirect('admin/products/add');
    }
    public function show(){
        $data = Product::all();
        return view('admin.product.list',['title' => 'Danh sách sản phẩm'],['products'=>$data]);
    }
    public function showData($id)
    {
        $data= Product::find($id);
        return view('admin.product.edit',['title' => 'Danh sách sản phẩm'],['product'=>$data]);
    }
    public function update(Request $req)
    {
        $data = Product::find($req->id);
        $data->name = $req->name;
        $data->category = $req->danhmuc;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->gallery = $req->thumb;
        $data->save();
        return redirect('admin/products/list');
    }
    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('admin/products/list');
    }
}
