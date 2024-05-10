<?php

namespace Database\Seeders;

use App\Models\ServiceModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            // Harga Co Working Ubud
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Monthly Unlimited',
                'service_category' => 'Co-Working',
                'flexible_payment' => 'No',
                'idr_price' => 2950000,
                'usd_price' => 184.16,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Dedicacted Desk',
                'service_category' => 'Co-Working',
                'flexible_payment' => 'No',
                'idr_price' => 3600000,
                'usd_price' => 224.74,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Night Owl',
                'service_category' => 'Co-Working',
                'flexible_payment' => 'No',
                'idr_price' => 1500000,
                'usd_price' => 93.64,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Medium',
                'service_category' => 'Co-Working',
                'flexible_payment' => 'No',
                'idr_price' => 1650000,
                'usd_price' => 103.01,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Lite',
                'service_category' => 'Co-Working',
                'flexible_payment' => 'No',
                'idr_price' => 850000,
                'usd_price' => 52.06,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Day Pass',
                'service_category' => 'Co-Working',
                'flexible_payment' => 'No',
                'idr_price' => 230000,
                'usd_price' => 14.36,
            ],
        ];

        foreach ($services as $row) {
            ServiceModel::create($row);
        }
    }
}
