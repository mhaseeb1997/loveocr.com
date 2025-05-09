<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OcrController extends Controller
{
     public function image_to_text(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
        ]);
        $file = $request->file('file');
        $response = Http::attach(
            'files',
            file_get_contents($file),
            $file->getClientOriginalName()
        )->post('https://loveocr.com/python_api/ocr/api/ocr');
        if ($response->successful()) {
            return response()->json([
                'message' => 'OCR processed successfully',
                'data' => $response->json()
            ]);
        }
        return response()->json([
            'message' => 'OCR processing failed',
            'error' => $response->body()
        ], $response->status());

    }


}
