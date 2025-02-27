<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function list()
    {
    try{
        $project = Project::paginate(10);
        return response()->json(['Projects'=>$project , 'status' =>'success']);
    }catch (\Exception $ex){
        return response()->json(['Something Wrong! '=>$ex->getMessage() , 'status' => 'error']);
    }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        try {

            $validatedData = $request->validated();

            $result = $this->projectService->createProject($validatedData);

            if (!$result['status']) {
                return response()->json(['message' => 'Error creating Project', 'error' => $result['error']], 500);
            }

            return response()->json(['message' => 'Project created successfully', 'project' => $result,"status"=>"true"], 201);
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
            $project = Project::find($id);

            if (!$project) {
                return response()->json(['message' => 'Project not found' , 'status' => 'false'], 404);
            }

            $project->delete();

            return response()->json(['message' => 'Project deleted successfully','status' => 'true'], 200);
        }
}
