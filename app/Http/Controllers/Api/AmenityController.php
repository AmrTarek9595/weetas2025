<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmenityRequest;
use App\Http\Requests\UpdateAmenityRequest;
use App\Models\SuggestedAmenity;
use App\Services\AmenityService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AmenityController extends Controller
{
    protected $amenityService;

    public function __construct(AmenityService $amenityService)
    {
        $this->amenityService = $amenityService;
    }

    public function list()
    {
    try{
        $amenity = SuggestedAmenity::get();
        return response()->json(['Amenity'=>$amenity , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmenityRequest $request)
    {
        try {
            $data = $request->validated();

            // Handle file upload if an icon is provided
            if ($request->hasFile('icon')) {
                $path = $request->file('icon')->store('amenities', 'public'); // Store in storage/app/public/amenities
                $data['icon'] = 'storage/' . $path;
            }

            $amenity = SuggestedAmenity::create($data);

            return response()->json([
                'message' => 'Amenity created successfully',
                'amenity' => $amenity,
                'status' =>'success'
            ], 201);
        } catch (Exception $ex) {
            return response()->json([
                'message' => 'Something went wrong!',
                'error'   => $ex->getMessage(),
                'status'   =>'error'
            ], 500);
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
    public function update(UpdateAmenityRequest $request, string $id)
        {
            try {
                $amenity = SuggestedAmenity::findOrFail($id);

                // Handle icon upload
                if ($request->hasFile('icon')) {
                    // Delete old icon if exists
                    if ($amenity->icon) {
                        Storage::delete('public/amenities/' . $amenity->icon);
                    }

                    // Store new icon
                    $iconPath = $request->file('icon')->store('public/amenities');
                    $amenity->icon = basename($iconPath);
                }

                // Update the amenity details
                $amenity->update([
                    'name_en' => $request->name_en,
                    'name_ar' => $request->name_ar,
                ]);

                return response()->json([
                    'message' => 'Amenity updated successfully!',
                    'data' => $amenity,
                    'status' =>'success'
                ], 200);

            } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Failed to update amenity!',
                    'error' => $e->getMessage(),
                    'status' =>'error'
                ], 500);
            }
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $amenity = SuggestedAmenity::find($id);

        if (!$amenity) {
            return response()->json(['message' => 'Amenity not found' , 'status' => 'error'], 404);
        }

        $amenity->delete();

        return response()->json(['message' => 'Amenity deleted successfully','status' => 'success'], 200);
    }
}
