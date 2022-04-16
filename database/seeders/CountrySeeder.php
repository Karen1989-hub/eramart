<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //Country::factory()->count(1)->create();
        //$country = [''];
        $countrys = ['afganistan.png','albania.gif','amerika.svg.png','andorra.gif',
    'armenia.png','austria.gif','bahrejn.png','bangladesh.png','belarusia.gif',
    'belgium.gif','bosnia-gercegovina.gif','brunei.png','bulgaria.gif','butan.png','Canada.svg.png','china.png','croatia.gif',
    'cyprus.png','czech-republic.gif','denmark.gif','egypt.png','estonia.gif','finland.gif',
    'france.gif','georgia.png','germany.gif','great-britain.gif','greece.gif','hungary.gif',
    'iceland.gif','india.png','indonesia.png','iran.png','iraq.png','ireland.gif','israel.png',
    'italy.gif','japan.png','jordan.png','kazakhstan.png','kh.png','kipr.gif','kirgisia.png',
    'kuwait.png','laos.png','latvia.gif','lebanon.png','liechtenstein.gif','luksemburg.gif',
    'macedonia.gif','maldives.png','malta.gif','moldova.gif','monaco.gif','mongolia.png',
    'my.png','myanmar.png','nepal.png','netherlands.gif','north-korea.png','norway.gif','oman.png',
    'pakistan.png','palestine.png','philippines.png','poland.gif','portugal.gif','qatar.png',
    'romania.gif','russia.png','san-marino.gif','saudi-arabia.png','singapore.png','slovakia.gif',
    'south-korea.png','spain.gif','sri-lanka.png','sweden.gif','switzerland.gif',
    'syria.png','taiwan.png','tajikistan.png','thailand.png','timor-leste.png','turkey.gif',
    'turkey.png','turkmenustan.png','ukraine.gif','united-arab-emirates.png','uzbekistan.png',
    'vjetnam.png','yemen.png','yugoslavia.gif'];

        foreach ($countrys as $val){
            $name = ucfirst(explode('.',$val)[0]);
            $imgName = $val;

            Country::create(
                [
                    'name' => $name,
                    'flag_img' => $imgName
                ]
            );
        };



    }
}
