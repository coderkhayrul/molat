<?php


use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;


if (!function_exists('success')) {

    function success(string $message = 'Success', $data = [], int $statusCode = 200, bool $success = true): JsonResponse
    {
        return response()->json([
            'success' => $success,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}

if (!function_exists('makeDirectory')) {
    function makeDirectory($location): void
    {
        if (!File::isDirectory(public_path() . $location)) {
            File::makeDirectory(public_path() . $location, 0777, true, true);
        }
    }
}

if (!function_exists('saveImage')) {
    function saveImage($image, $location): string
    {
        makeDirectory($location);
        $imageName = random_int(10000000, 99999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . $location, $imageName);

        return $location . $imageName;
    }
}

if (!function_exists('deleteImage')) {
    function deleteImage($image): void
    {
        if (File::exists(public_path() . $image)) {
            File::delete(public_path() . $image);
        }
    }
}
