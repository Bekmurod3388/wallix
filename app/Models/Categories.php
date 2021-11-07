<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, $category_id)
 * @method static where(string $string, $category_id)
 */

class Categories extends Model
{
    use HasFactory;
    protected $fillable =['name'];


    public function solution()
    {
        return $this->hasMany(solution::class);
    }
}
