<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class QueueController extends Controller
{
    public function handleJob()
    {

        try {
            $running = new TaskLogic2Job();
            $this->dispatch($running);
            Log::info("Proses Berhasil");
        } catch (\Throwable $th) {
            Log::error("Error get user : ".$th->getMessage());
        }

    }
}
