<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $array)
 * @method static where(string $string)
 * @property mixed category_id
 */
class solution extends Model
{
    use HasFactory;
    protected $fillable = ['title','text','img','category_id'];
}
