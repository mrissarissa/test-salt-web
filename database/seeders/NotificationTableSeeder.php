<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;
class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notification::create([
            'title' => 'Pembayaran Berhasil',
            'description' => 'Pembayaran anda telah berhasil',
            'category' => 'PAYMENT',
            'user_id' => 1
        ]);
        Notification::create([
            'title' => 'Promo',
            'description' => 'Deskripsi Promo',
            'category' => 'PROMO',
            'user_id' => null
        ]);
        Notification::create([
            'title' => 'Pembayaran Batal',
            'description' => 'Pembayaran dibatalkan',
            'category' => 'PAYMENT',
            'user_id' => 1
        ]);
        Notification::create([
            'title' => 'Pembayaran',
            'description' => 'Segera lakukan pembayaran',
            'category' => 'PAYMENT',
            'user_id' => 3
        ]);
    }
}
