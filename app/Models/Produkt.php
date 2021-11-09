<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $array)
 */
class Produkt extends Model
{
    use HasFactory;
    protected $fillable = ['title','text','img','category_id'];
}