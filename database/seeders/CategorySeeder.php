<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Office;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::query()->create([
            'name'=>'Упрощенное управление привилегированным доступом для обеспечения
                безопасности и мониторинга доступа из любого места',
        ]);
        Categories::query()->create([
            'name'=>'Безопасный удаленный доступ к важным ресурсам для ИТ-администраторов и внешних поставщиков',
        ]);
        Categories::query()->create([
            'name'=>'Опробуйте отмеченное наградами решение Wallix для управления привилегированным доступом совершенно бесплатно',
        ]);
        Categories::query()->create([
            'name'=>'Обеспечение
                конвергенции IT-OT',
        ]);
        Categories::query()->create([
            'name'=>'Так много нужно обеспечить, так мало времени',
        ]);
        Categories::query()->create([
            'name'=>'Schneider Electric
                iPAM',
        ]);
        Categories::query()->create([
            'name'=>'Wallix Bastion
                Менеджер доступа',
        ]);

    }
}
