<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function show()
    {
        $filePath = storage_path('app/public/tesis.pdf');
        return response()->file($filePath);
    }
}
