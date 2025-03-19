<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function profile(){
        try{
            $user=auth()->user();
            return response()->json(['User'=>$user , 'status' =>'success']);
        }catch (\Exception $ex){
            return response()->json(['error'=>$ex->getMessage() , 'status' => 'error']);
        }

    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        try {
            $user = auth()->user();

            $data = $request->validated();

            // Hash password only if provided
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }

            $user->update($data);

            return response()->json([
                'message' => 'Profile updated successfully',
                'user'    => $user,
                'status'  => 'success',
            ]);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage(), 'status' => 'error'], 500);
        }
    }
}
