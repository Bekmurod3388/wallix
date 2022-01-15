<?php
    function strLimit($text, $len = 50) {
        return strip_tags(Illuminate\Support\Str::limit($text, $len, '...'));
    }
