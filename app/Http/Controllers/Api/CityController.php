<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Services\CityService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function list()
    {
    try{
        $city = City::get();
        return response()->json(['Cities'=>$city , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        try {

            $validatedData = $request->validated();

            $result = $this->cityService->createCity($validatedData);

            if (!$result['status']) {
                return response()->json(['message' => 'Error creating City', 'error' => $result['error']], 500);
            }

            return response()->json(['message' => 'City created successfully', 'city' => $result,"status"=>"true"], 201);
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
    public function update(UpdateCityRequest $request, string $id)
    {
        //
        try{
            $city = City::find($id);

            if (!$city) {
                return response()->json(['message' => 'City not found' , 'status' =>'error'], 404);
            }

            $city->update($request->validated());

            return response()->json([
                'message' => 'City updated successfully',
                'City' => $city,
                'status' =>'success'
            ]);

        }catch(Exception $ex){
            return response()->json(['eror Occurd!! ' , $ex->getMessage() , 'status' =>'error'] , 404);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
        {
            $city = City::find($id);

            if (!$city) {
                return response()->json(['message' => 'City not found' , 'status' => 'false'], 404);
            }

            $city->delete();

            return response()->json(['message' => 'City deleted successfully','status' => 'true'], 200);
        }
}
