<?php

namespace App\Models;

use Google\Cloud\Firestore\FieldValue;
use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'action', 'entity_type', 'description', 'user_id',
    ];

    protected $connection = 'firestore';

    protected $collection = 'audit_logs';

    public function firestore()
    {
        return app(FirestoreClient::class);
    }

    public function create(array $data = [])
    {
        $data['created_at'] = FieldValue::serverTimestamp();
        return $this->firestore()->collection($this->collection)->add($data);
    }
}
