<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    public static function upload($request)
    {
        $imageFile = $request->image;
        if (!is_null($imageFile) && $imageFile->isValid()) {
            $imageFilePath = Storage::putFile('/public/shops', $imageFile);
            return str_replace('public/shops/', '', $imageFilePath);
        }
        return;
    }
}
