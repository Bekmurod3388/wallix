<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $template_id
 * @property string $template
 */

class Solution extends Model {
    use HasFactory;

    protected $fillable = ['title', 'text', 'img', 'template_id'];

    public function getTemplateAttribute() {
        return "template_" . $this->template_id;
    }

    public static function data($type) {
        $type = abs($type) < 5 ? abs($type) : 0;
        return Data::solution()[$type];
    }

    public static function filtered($type) {
        return array_filter(Data::solution(), function($index) use ($type) {
            return $index != $type;
        }, ARRAY_FILTER_USE_KEY);
    }
}
