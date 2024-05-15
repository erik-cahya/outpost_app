<?php

namespace Database\Seeders;

use App\Models\CountryModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Afghanistan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Albania'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Algeria'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Andorra'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Angola'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Antigua and Barbuda'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Argentina'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Armenia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Australia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Austria'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Azerbaijan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bahamas'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bahrain'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bangladesh'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Barbados'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Belarus'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Belgium'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Belize'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Benin'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bhutan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bolivia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bosnia and Herzegovina'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Botswana'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brazil'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Brunei'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Bulgaria'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Burkina Faso'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Burundi'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Cabo Verde'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Cambodia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Cameroon'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Canada'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Central African Republic'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Chad'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Chile'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'China'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Colombia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Comoros'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Congo, Democratic Republic of the'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Congo, Republic of the'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Costa Rica'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Croatia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Cuba'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Cyprus'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Czech Republic'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Denmark'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Djibouti'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Dominica'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Dominican Republic'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Ecuador'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Egypt'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'El Salvador'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Equatorial Guinea'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Eritrea'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Estonia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Eswatini'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Ethiopia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Fiji'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Finland'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'France'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Gabon'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Gambia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Georgia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Germany'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Ghana'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Greece'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Grenada'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Guatemala'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Guinea'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Guinea-Bissau'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Guyana'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Haiti'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Honduras'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Hungary'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Iceland'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'India'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Indonesia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Iran'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Iraq'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Ireland'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Israel'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Italy'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jamaica'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Japan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Jordan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Kazakhstan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Kenya'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Kiribati'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Kuwait'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Kyrgyzstan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Laos'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Latvia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Lebanon'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Lesotho'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Liberia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Libya'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Liechtenstein'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Lithuania'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Luxembourg'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Madagascar'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Malawi'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Malaysia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Maldives'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mali'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Malta'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Marshall Islands'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mauritania'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mauritius'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mexico'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Micronesia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Moldova'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Monaco'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mongolia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Montenegro'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Morocco'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Mozambique'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Myanmar'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Namibia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Nauru'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Nepal'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Netherlands'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'New Zealand'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Nicaragua'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Niger'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Nigeria'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'North Korea'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'North Macedonia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Norway'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Oman'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Pakistan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Palau'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Palestine'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Panama'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Papua New Guinea'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Paraguay'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Peru'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Philippines'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Poland'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Portugal'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Qatar'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Romania'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Russia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Rwanda'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Saint Kitts and Nevis'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Saint Lucia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Saint Vincent and the Grenadines'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Samoa'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'San Marino'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Sao Tome and Principe'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Saudi Arabia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Senegal'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Serbia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Seychelles'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Sierra Leone'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Singapore'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Slovakia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Slovenia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Solomon Islands'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Somalia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'South Africa'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'South Korea'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'South Sudan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Spain'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Sri Lanka'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Sudan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Suriname'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Sweden'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Switzerland'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Syria'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Taiwan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Tajikistan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Tanzania'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Thailand'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Togo'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Tonga'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Trinidad and Tobago'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Tunisia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Turkey'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Turkmenistan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Tuvalu'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Uganda'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Ukraine'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'United Arab Emirates'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'United Kingdom'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'United States'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Uruguay'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Uzbekistan'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Vanuatu'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Vatican City'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Venezuela'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Vietnam'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Yemen'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Zambia'
            ],
            [
                'id' => mt_rand(100000000000000, 999999999999999),
                'name' => 'Zimbabwe'
            ]
        ];

        foreach ($countries as $ctr) {
            CountryModel::create($ctr);
        }
    }
}
