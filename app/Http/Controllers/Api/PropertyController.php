<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Services\PropertyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function allProperties()
    {
    try{
        $property = Property::latest()->get();
        return response()->json(['Properties'=>$property , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    public function show(string $id)
    {
        try{
            $property = Property::with(['amenities', 'images'])->find($id);

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

        public function deleteImage($imageId)
        {
            try {

                $image = PropertyImage::find($imageId);

                if (!$image) {
                    return response()->json(['message' => 'Image not found', 'status' => 'error'], 404);
                }

                // Delete the file from storage
                Storage::disk('public')->delete($image->image_path);

                // Delete from database
                $image->delete();

                return response()->json(['message' => 'Image deleted successfully', 'status' => 'success']);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage(), 'status' => 'error'], 500);
            }
        }

        public function addImages(Request $request, $propertyId)
        {
            try {
                $property = Property::find($propertyId);

                if (!$property) {
                    return response()->json(['message' => 'Property not found', 'status' => 'error'], 404);
                }

                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $path = $image->store('property_images', 'public');
                        $property->images()->create(['image_path' => 'storage/' . $path]);
                    }
                }

                return response()->json(['message' => 'Images added successfully', 'status' => 'success']);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage(), 'status' => 'error'], 500);
            }
        }
}


