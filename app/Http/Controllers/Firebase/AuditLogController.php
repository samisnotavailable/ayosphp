<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuditLog;

class AuditLogController extends Controller
{
    public function index()
    {
        $auditLogs = AuditLog::orderBy('created_at', 'desc')->paginate(10);

        return view('audit_logs.index', ['auditLogs' => $auditLogs]);
    }
}
