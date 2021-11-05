<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::query()->create([
           'country'=>'Азербайджан',
            'adress'=>'Баку, ул. С.Вургуна, 34 ',
            'phone'=>'+994 (12) 597 30 80 ',
            'email'=>'sales@abrisdc.az',
        ]);
        Office::query()->create([
            'country'=>'Армения',
            'adress'=>' Ереван, ул. Теряна, 92/1-11 ',
            'phone'=>'+374 (98) 12 14 77 ',
            'email'=>'sales@abrisdc.ar',
        ]);
        Office::query()->create([
            'country'=>'Казахстан',
            'adress'=>'Алматы, пр. Достык, 248Б-202А ',
            'phone'=>'+7 (727) 339 51 55',
            'email'=>'sales@abrisdc.kz',
        ]);
        Office::query()->create([
            'country'=>'Беларусь',
            'adress'=>'Беларусь, Минск, ул. Карастояновой, 32-5',
            'phone'=>'+375 (17) 317 03 83',
            'email'=>'sales@abrisdc.by',
        ]);

        Office::query()->create([
            'country'=>'Грузия',
            'adress'=>'Грузия, Тбилиси, ул. Карастояновой, 32-5 ',
            'phone'=>'+375 (17) 317 03 83',
            'email'=>'sales@abrisdc.ge',
        ]);
        Office::query()->create([
            'country'=>'Кыргызстан',
            'adress'=>'Бишкек, пр. Достык, 248Б-202А',
            'phone'=>'+7 (727) 339 51 55',
            'email'=>'sales@abrisdc.kg',
        ]);

        Office::query()->create([
            'country'=>'Молдова',
            'adress'=>'Кишинёв, ул. Болгарская, 31А',
            'phone'=>'+7 (727) 339 51 55',
            'email'=>'sales@abrisdc.md',
        ]);
        Office::query()->create([
            'country'=>'Монголия',
            'adress'=>'Улан-Батор, пр. Достык, 248Б-202А',
            'phone'=>'+7 (727) 339 51 55',
            'email'=>'sales@abrisdc.mn',
        ]);
        Office::query()->create([
            'country'=>'Таджикистан',
            'adress'=>'Душанбе, ул. Болгарская, 31А',
            'phone'=>'+7 (727) 339 51 55',
            'email'=>'sales@abrisdc.tj',
        ]);
        Office::query()->create([
            'country'=>'Туркменистан',
            'adress'=>'Ашхабад, ул. Кулиева, 45',
            'phone'=>'+993 (12) 75 45 12',
            'email'=>'sales@abrisdc.tr',
        ]);
        Office::query()->create([
            'country'=>'Узбекистан',
            'adress'=>'Ташкент, ул. Фаргона, 15',
            'phone'=>'+998 (78) 148 53 00',
            'email'=>'sales@abrisdc.uz',
        ]);
    }
}
