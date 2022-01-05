<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::query()->create([
            'name'=>'Упрощенное управление привилегированным доступом для обеспечения
                безопасности и мониторинга доступа из любого места',
        ]);
        Category::query()->create([
            'name'=>'Безопасный удаленный доступ к важным ресурсам для ИТ-администраторов и внешних поставщиков',
        ]);
        Category::query()->create([
            'name'=>'Опробуйте отмеченное наградами решение Wallix для управления привилегированным доступом совершенно бесплатно',
        ]);
        Category::query()->create([
            'name'=>'Обеспечение
                конвергенции IT-OT',
        ]);
        Category::query()->create([
            'name'=>'Так много нужно обеспечить, так мало времени',
        ]);
        Category::query()->create([
            'name'=>'Schneider Electric
                iPAM',
        ]);
        Category::query()->create([
            'name'=>'Wallix Bastion
                Менеджер доступа',
        ]);

    }
}
