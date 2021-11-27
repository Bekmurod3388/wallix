<?php
    function strLimit($text, $len = 50) {
        return Illuminate\Support\Str::limit($text, $len, '...');
    }
