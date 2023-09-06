<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UploadsController extends Controller
{
    public function showContents()
    {
        $folderPath = "~/public/uploads/";

        // Check if the directory exists
        if (!File::isDirectory($folderPath)) {
            return view('uploads.index', ['contents' => []]);
        }

        // Get the contents of the directory (files and directories)
        $contents = File::allFiles($folderPath);

        return view('uploads.index', ['contents' => $contents]);
    }
}
