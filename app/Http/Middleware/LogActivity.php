<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AuditLog;

class LogActivity
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Determine the action being performed
        $action = $this->getAction($request);

        // Log the activity
        $this->logActivity($request, $action);

        return $response;
    }

    private function getAction(Request $request)
    {
        // Determine the action based on the HTTP method
        $action = $request->method();

        // You can customize this logic further if needed, e.g., checking route names, etc.

        return $action;
    }

    private function logActivity(Request $request, $action)
    {
        // Log the activity to the database
        AuditLog::create([
            'id' => auth()->id(),
            'action' => $action,
            'entity_type' => $this->getControllerName($request),
            'description' => $this->getDescription($request),
        ]);
    }

    private function getControllerName(Request $request)
    {
        // Get the fully qualified class name of the controller
        $controllerName = get_class($request->route()->controller);

        // Extract the class name without the namespace
        $controllerName = class_basename($controllerName);

        return $controllerName;
    }

    private function getDescription(Request $request)
    {
        // You can customize this method to generate a description based on the request
        return 'Performed ' . $request->method() . ' request to ' . $request->url();
    }
}
