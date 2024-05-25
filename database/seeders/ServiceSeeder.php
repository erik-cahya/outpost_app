<?php

namespace Database\Seeders;

use App\Models\LocationModel;
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

        $OutpostUbud = LocationModel::where('name', 'Outpost Ubud')->first();
        $OutpostPenestanan = LocationModel::where('name', 'Outpost Penestanan')->first();


        $services = [
            // Harga Co Working Ubud
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Monthly Unlimited',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 2950000,
                'usd_price' => 184.50,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Dedicacted Desk',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 3600000,
                'usd_price' => 225.15,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Night Owl',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 1500000,
                'usd_price' => 93.81,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Medium',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 1650000,
                'usd_price' => 103.20,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Lite',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 850000,
                'usd_price' => 52.16,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Day Pass',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 230000,
                'usd_price' => 14.38,
            ],

            // Office/Rooms Packages
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => '2nd Floor Main Room + Brahmacari + Balcony - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 13805000,
                'usd_price' => 863.41,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => '2nd Floor Main Room + Balcony - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 10215000,
                'usd_price' => 638.88,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brahmacari - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 470000,
                'usd_price' => 29.40,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brahmacari - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 760000,
                'usd_price' => 47.53,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brahmacari - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 3800000,
                'usd_price' => 237.66,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brahmacari - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 13945000,
                'usd_price' => 872.16,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brahmacari - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 42100000,
                'usd_price' => 2633.06,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Campuhan - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 375000,
                'usd_price' => 23.45,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Campuhan - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 620000,
                'usd_price' => 38.78,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Campuhan - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 3035000,
                'usd_price' => 189.82,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Campuhan - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 12150000,
                'usd_price' => 759.90,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Campuhan - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 36580000,
                'usd_price' => 2287.82,
            ],

            // ####### Laba
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Laba - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 100000,
                'usd_price' => 6.25,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Laba - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 165000,
                'usd_price' => 10.32,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Laba - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 760000,
                'usd_price' => 47.53,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Laba - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 3035000,
                'usd_price' => 189.82,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Laba - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 9110000,
                'usd_price' => 569.77,
            ],





            // ####### Mandala
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mandala - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 100000,
                'usd_price' => 6.25,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mandala - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 165000,
                'usd_price' => 10.32,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mandala - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 760000,
                'usd_price' => 47.53,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mandala - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 3035000,
                'usd_price' => 189.82,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mandala - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 9110000,
                'usd_price' => 569.77,
            ],





            // ####### Jaya
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jaya - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 190000,
                'usd_price' => 11.88,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jaya - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 305000,
                'usd_price' => 19.08,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jaya - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 1520000,
                'usd_price' => 95.07,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jaya - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 6215000,
                'usd_price' => 388.70,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jaya - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 18225000,
                'usd_price' => 1139.85,
            ],






            // ####### Shri
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Shri - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 190000,
                'usd_price' => 11.88,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Shri - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 305000,
                'usd_price' => 19.08,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Shri - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 1520000,
                'usd_price' => 95.07,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Shri - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 6215000,
                'usd_price' => 388.70,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Shri - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 18225000,
                'usd_price' => 1139.85,
            ],



            // Skype
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Skype - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostUbud->id,
                'flexible_payment' => 'No',
                'idr_price' => 70000,
                'usd_price' => 4.38,
            ],


            // Penestanan

            // Banjat
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Banjar - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 107000,
                'usd_price' => 6.70,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Banjar - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 215000,
                'usd_price' => 13.45,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Banjar - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 855000,
                'usd_price' => 53.47,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Banjar - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 5135000,
                'usd_price' => 321.16,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Banjar - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 20000000,
                'usd_price' => 1250.86,
            ],

            // Rooftop
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Rooftop - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 175000,
                'usd_price' => 10.95,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Rooftop - Hourly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 345000,
                'usd_price' => 21.58,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Rooftop - Daily',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 1175000,
                'usd_price' => 73.49,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Rooftop - Weekly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 7038000,
                'usd_price' => 440.18,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Rooftop - Monthly',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 27000000,
                'usd_price' => 1688.66,
            ],

            // Skype Room
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Skype Room - Hourly (Member Only)',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 65000,
                'usd_price' => 4.07,
            ],

            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Monthly Unlimited',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 2950000,
                'usd_price' => 184.50,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Dedicated Desk',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 3600000,
                'usd_price' => 225.15,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Night Owl',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 1500000,
                'usd_price' => 93.81,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Medium',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 1650000,
                'usd_price' => 103.20,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Lite',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 850000,
                'usd_price' => 53.16,
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Day Pass',
                'service_category' => 'Co-Working',
                'outpost_location_id' => $OutpostPenestanan->id,
                'flexible_payment' => 'No',
                'idr_price' => 230000,
                'usd_price' => 14.38,
            ],
        ];



        foreach ($services as $row) {
            ServiceModel::create($row);
        }
    }
}
