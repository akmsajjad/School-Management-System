<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;

class AdminController extends Controller
{
    public function list()
    {
        $data["getRecord"] = User::getAdmin();  
        $data["header_title"] = "Admin List ";
        return view('admin.admin.list', $data);
    }
    public function add()
    {
        $data["header_title"] = "Add New Admin";
        return view('admin.admin.add', $data);
    }
    public function insert(Request $request)
    {
        request()->validate([  
            'email' => 'required|email|unique:users'
        ]);
        $user = new user();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success','Admin Successfully Created.');
    }
    
    public function edit($id)
    {
        $data ['getRecord'] = user::getSingle($id);
        if(!empty($data ['getRecord']))
        {
            $data["header_title"] = "Edit Admin";
            return view('admin.admin.edit', $data);
        }   
        else
        {
            abort(404);
        }
        
    }
    public function update($id, Request $request)
    {
        $user = user::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }  
        $user->user_type = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success','Admin Successfully Updated.');
    }

    public function delete($id)
    {
        $user = user::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success','Admin Successfully Deleted.');
  
    }


}
