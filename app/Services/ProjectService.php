<?php

namespace App\Services;

use App\Models\Project;
use Exception;

class ProjectService
{
    public function createProject(array $data)
    {
        try {
            // Create the project
            $project = Project::create($data);
            return ['status' => true, 'Project' => $project];
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
