<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function userList()
    {
    try{
        $user = User::where('role' , 2)->get();
        return response()->json(['User'=>$user , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    public function vendorList()
    {
    try{
        $vendor = User::where('role' , 3)->get();
        return response()->json(['Vendor'=>$vendor , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }
}
