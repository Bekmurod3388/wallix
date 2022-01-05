<?php

namespace App\Http\Service;

use Illuminate\Support\Str;

trait FileHandler {

    function createFile($file, $folder) {
        $uuid = Str::uuid()->toString();
        $filename = $uuid . '-' . time() . '.' . $file->extension();
        $file->move(public_path("../storage/app/public/$folder"), $filename);

        return $filename;
    }
}
