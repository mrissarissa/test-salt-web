<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TaskLogicJob;
class CronController extends Controller
{
    public function handleJob()
    {
        $job =  new TaskLogicJob();
        $this->dispatch($job)->onQueue('task_scheduler');
    }
}
