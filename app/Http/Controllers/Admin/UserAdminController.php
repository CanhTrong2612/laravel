<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    public function list()
    {
            $data = User::all();
            return view('admin.users.listUser',['title' => 'Danh sách người dùng'],['users'=>$data]);
        
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('admin/sliders/list');
    }
}
