<?php
namespace Armcanada\TaskLogger\Commands;

use Armcanada\TaskLogger\Models\Task;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

abstract class LoggableCommand extends Command
{
    protected function logExecution(callable $callback)
    {
        $start = now();
        $task = Task::findBySlug($this->signature);

        if (!$task) {
            $callback();
            Log::info("Task not found for signature: {$this->signature}");
            return;
        }

        try {
            $callback();
            $success = true;
            $error = null;
        } catch (\Exception $e) {
            $success = false;
            $error = $e->getMessage()."\n".$e->getTraceAsString();
        }

        \TaskLogger::log($task->ID, $start, now(), $this->getTaskPayload(), $success, $error);

        if (!$success) {
            throw $e;
        }
    }
    
    protected function getTaskPayload(): ?string
    {
        return null;
    }
}