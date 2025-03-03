<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Services\PropertyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    protected $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    public function list()
    {
    try{
        $property = Property::paginate(10);
        return response()->json(['Properties'=>$property , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    public function show(string $id)
    {
        try{
            $property = Property::find($id);

            if (!$property) {
                return response()->json(['message' => 'Property not found','status' => 'error'] , 404);
            }

            return response()->json(['Property'=>$property , 'status' => 'success'], 200);
        }catch (\Exception $ex){
            return response()->json(['message'=>$ex->getMessage() ,'status' => 'error'] ,404);
        }

    }

    public function store(PropertyRequest $request)
    {
        try {

            $validatedData = $request->validated();

            $result = $this->propertyService->createProperty($validatedData);

            if (!$result['status']) {
                return response()->json(['message' => 'Error creating property', 'error' => $result['error']], 500);
            }

            return response()->json(['message' => 'Property created successfully', 'property' => $result,"status"=>"true"], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage() , 'status' => 'false'], 500);
        }
    }

    public function update(PropertyRequest $request, string $id)
    {
        try{
            $property = Property::find($id);
            if (!$property) {
                return response()->json(['message' => 'Property not found'], 404);
            }

            $property->update($request->validated());

            return response()->json([
                'message'  => 'Property updated successfully',
                'property' => $property
            ]);
        }catch (\Exception $ex){
            return response()->json(['message'=> 'Error ocuured!!', $ex->getMessage()] , 500);
        }
    }

    public function destroy($id): JsonResponse
        {
            $property = Property::find($id);

            if (!$property) {
                return response()->json(['message' => 'Property not found' , 'status' => 'false'], 404);
            }

            $property->delete();

            return response()->json(['message' => 'Property deleted successfully','status' => 'true'], 200);
        }
}


