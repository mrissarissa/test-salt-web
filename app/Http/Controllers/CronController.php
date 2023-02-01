<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TaskLogic2Job;
class CronController extends Controller
{
    public function handleJob(Request $request)
    {
        echo "Perulangan mulai";
        $max = 10;
        for($i=0;$i <= $max ;$i++){
            TaskLogic2Job::dispatch($i)->onQueue('task_scheduler');

            if($i == $max){
                echo "Perulangan selesai";
            }
        }

    }
}
