<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Models\Location;
use App\Services\LocationService;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LocationController extends Controller
{
    //

 /**
     * Display a listing of the resource.
     */
    protected $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    public function list()
    {
    try{
        $location = Location::get();
        return response()->json(['Locations'=>$location , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

/**
     * Store a newly created resource in storage.
     */
    public function store(LocationRequest $request)
    {
        try {

            $validatedData = $request->validated();

            $result = $this->locationService->createLocation($validatedData);

            if (!$result['status']) {
                return response()->json(['message' => 'Error creating Location', 'error' => $result['error']], 500);
            }

            return response()->json(['message' => 'Location created successfully', 'Location' => $result,"status"=>"success"], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage() , 'status' => 'error'], 500);
        }
    }


    public function update(UpdateLocationRequest $request, string $id)
    {
        //
        try{
            $location = Location::find($id);

            if (!$location) {
                return response()->json(['message' => 'Location not found' , 'status' =>'error'], 404);
            }

            $location->update($request->validated());

            return response()->json([
                'message' => 'Location updated successfully',
                'location' => $location,
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
        $location = Location::find($id);

        if (!$location) {
            return response()->json(['message' => 'Location not found' , 'status' => 'false'], 404);
        }

        $location->delete();

        return response()->json(['message' => 'Location deleted successfully','status' => 'true'], 200);
    }

}
