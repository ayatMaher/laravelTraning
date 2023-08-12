<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
