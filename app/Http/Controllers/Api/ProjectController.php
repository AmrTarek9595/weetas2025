<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Services\ProjectService;
use Exception;
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

            return response()->json(['message' => 'Project created successfully', 'project' => $result,"status"=>"success"], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage() , 'status' => 'error'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $project = Project::find($id);

            if (!$project) {
                return response()->json(['message' => 'Project not found','status' => 'error'] , 404);
            }

            return response()->json(['Project'=>$project , 'status' => 'success'], 200);
        }catch (\Exception $ex){
            return response()->json(['message'=>$ex->getMessage() ,'status' => 'error'] ,404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, string $id)
    {
        //
        try{
            $project = Project::find($id);

            if (!$project) {
                return response()->json(['message' => 'Project not found' , 'status' =>'error'], 404);
            }

            $project->update($request->validated());

            return response()->json([
                'message' => 'Project updated successfully',
                'project' => $project,
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
            $project = Project::find($id);

            if (!$project) {
                return response()->json(['message' => 'Project not found' , 'status' => 'error'], 404);
            }

            $project->delete();

            return response()->json(['message' => 'Project deleted successfully','status' => 'success'], 200);
        }
}
