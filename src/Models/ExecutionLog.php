<?php

namespace Armcanada\TaskLogger\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExecutionLog extends Model
{
    protected $table = '_LGSExecutionLogs';
    protected $primaryKey = 'ID';
    protected $connection = 'tcollect';
    protected $guarded = ['ID'];

    public $timestamps = false;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->connection = config('tasklogger.connection');
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'TaskID', 'ID');
    }
}