<?php

namespace Database\Seeders;

use App\Models\LocationModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutpostLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = [
            [
                'id' => 1,
                'name' => 'Outpost Ubud'
            ],
            [
                'id' => 2,
                'name' => 'Outpost Penestanan'
            ]
        ];

        foreach ($location as $ctr) {
            LocationModel::create($ctr);
        }
    }
}
