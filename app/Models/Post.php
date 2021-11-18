<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static orderby(string $string, string $string1)
 * @method static where(string $string, $id)
 * @property int id
 */
class Post extends Model
{
    use HasFactory;
    protected $fillable = ['header_ru','header2_ru','description_ru','header_uz','header2_uz','description_uz','header_en','header2_en','description_en','img','viewed'];


}
