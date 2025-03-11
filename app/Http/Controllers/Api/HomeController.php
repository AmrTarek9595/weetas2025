<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function lastProperties(){

        try{
            $proprities=Property::latest()->take(5)->get()->shuffle();

            return response()->json(['message' => 'Properties retrieved successfully!' , 'status' =>'success' , 'Properties'=>$proprities] ,200);
        }catch(\Exception $ex){
            return response()->json(['message'=> $ex->getMessage() ,'status'=> 'error'] ,404);
        }

    }


    public function getPropertiesByLocation(Request $request)
    {
        try{
            $userCity = $request->input('city');

            $properties = Property::whereHas('location', function ($query) use ($userCity) {
                $query->where('city', 'LIKE', "%$userCity%")
                    ->orWhere('town', 'LIKE', "%$userCity%");
            })->latest()->take(5)->get()->shuffle();

            return response()->json([
                'message' => 'Properties retrieved successfully!',
                'status' => 'success',
                'data' => $properties
            ], 200);

        }catch(\Exception $ex){
            return response()->json();
        }

    }
}
