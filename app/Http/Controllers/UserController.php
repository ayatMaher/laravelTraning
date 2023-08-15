<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::query()->where('id' , '>' , 50)->get();
        // dd($data);
        return view('users.index' , $data);
    }

    public function delete($id){
        User::query()->where('id' , $id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $user = User::findOrFail($id);

        return view('users/edit',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect()->route('users')->with('success', 'User updated successfully.');
    }
}
