{{-- resources/views/audit_logs/index.blade.php --}}

<h1>Audit Logs</h1>

<table>
    <thead>
    <tr>
        <th>User</th>
        <th>Action</th>
        <th>Entity Type</th>
        <th>Description</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($auditLogs as $auditLog)
        <tr>
            <td>{{ $auditLog->user->name }}</td>
            <td>{{ $auditLog->action }}</td>
            <td>{{ $auditLog->entity_type }}</td>
            <td>{{ $auditLog->description }}</td>
            <td>{{ $auditLog->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $auditLogs->links() }}
