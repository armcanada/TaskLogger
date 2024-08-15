<?php

namespace Armcanada\TaskLogger\Models;

use Armcanada\TaskLogger\Enums\Application;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = '_LGSTasks';
    protected $primaryKey = 'ID';
    protected $connection = 'tcollect';

    public $timestamps = false;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->connection = config('tasklogger.connection');
    }

    protected function casts(): array
    {
        return [
            'Application' => Application::class,
        ];
    }

    public static function findBySlug(string $slug): ?self
    {
        return self::on(config('tasklogger.connection'))->where('Slug', $slug)->first();
    }
}