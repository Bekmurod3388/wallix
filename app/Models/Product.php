<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $array)
 * @property int category_id
 * @property string $img
 */
class Product extends Model {
    use HasFactory;
    protected $fillable = ['title', 'text', 'img'];

    public static function best($type) {
        return Data::product('best')[$type];
    }

    public static function trust($type) {
        $type = abs($type) < 5 ? abs($type) : 0;
        return Data::product('trust')[$type];
    }

    public static function filtered($key, $type) {
        return array_filter(Data::product($key), function($index) use ($type) {
            return $index != $type;
        }, ARRAY_FILTER_USE_KEY);
    }

//    Членство в локальной группе
//    Смена пароля
//    Контроль над вымогателями
//    Управление приложениями


}
