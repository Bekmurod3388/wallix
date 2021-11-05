<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 * @method static where(string $string, $id)
 * @method static orderBy(string $string, string $string1)
 */
class Messages extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'phone', 'email', 'company', 'country', 'industry', 'trustelem', 'bestsafe', 'bastion', 'text'];


}


