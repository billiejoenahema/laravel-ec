<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    public static function upload($imageFile, $dir)
    {
        if (is_array($imageFile)) {
            $file = $imageFile['image'];
        } else {
            $file = $imageFile;
        }

        if (!is_null($file) && $file->isValid()) {
            $imageFilePath = Storage::putFile('/public/' . $dir, $file);
            return str_replace('public/' . $dir . '/', '', $imageFilePath);
        }
        return;
    }
}
