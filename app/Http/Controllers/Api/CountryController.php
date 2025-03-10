<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\PropertyRequest;
use App\Models\Country;
use App\Services\CountryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    public function list()
    {
    try{
        $country = Country::get();
        return response()->json(['Countries'=>$country , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(CountryRequest $request)
     {
         try {

             $validatedData = $request->validated();

             $result = $this->countryService->createCountry($validatedData);

             if (!$result['status']) {
                 return response()->json(['message' => 'Error creating Country', 'error' => $result['error']], 500);
             }

             return response()->json(['message' => 'Country created successfully', 'country' => $result,"status"=>"true"], 201);
         } catch (\Exception $e) {
             return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage() , 'status' => 'false'], 500);
         }
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy($id): JsonResponse
        {
            $country = Country::find($id);

            if (!$country) {
                return response()->json(['message' => 'Country not found' , 'status' => 'false'], 404);
            }

            $country->delete();

            return response()->json(['message' => 'Country deleted successfully','status' => 'true'], 200);
        }
    }

