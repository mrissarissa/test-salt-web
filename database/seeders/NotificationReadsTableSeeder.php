<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NotificationReads;

class NotificationReadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         NotificationReads::create([
            'is_read' => 1,
            'notification_id' => 1,
            'user_id' => 1
        ]);
        NotificationReads::create([
            'is_read' => 1,
            'notification_id' => 2,
            'user_id' => 1
        ]);
        NotificationReads::create([
            'is_read' => 1,
            'notification_id' => 3,
            'user_id' => 3
        ]);
        NotificationReads::create([
            'is_read' => 1,
            'notification_id' => 3,
            'user_id' => 1
        ]);
    }
}
