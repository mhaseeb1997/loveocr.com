<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use GuzzleHttp\Client;
class OcrController extends Controller
{ 
     public function index()
    {
        return view('ocr');
    }

    /**
     * Proxy the OCR API request using cURL
     */
    public function proxyOcr(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|max:10240', // Max 10MB
        ]);

        try {
            // Get the uploaded file
            $file = $request->file('file');
            
            // Initialize cURL
            $curl = curl_init();
            
            // Create a CURLFile object
            $curlFile = new \CURLFile(
                $file->getPathname(),
                $file->getMimeType(),
                $file->getClientOriginalName()
            );
            
            // Setup cURL options
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://loveocr.com/python_api/ocr/api/ocr',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_FOLLOWLOCATION => true, // Follow redirects
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => ['file' => $curlFile],
                CURLOPT_HTTPHEADER => [
                    'Accept: */*',
                ],
            ]);
            
            // Execute cURL request
            $response = curl_exec($curl);
            $error = curl_error($curl);
            
            // Close cURL
            curl_close($curl);
            
            // Check for errors
            if ($error) {
                throw new \Exception("cURL Error: " . $error);
            }
            
            // Return the API response
            return response($response)->header('Content-Type', 'application/json');
            
        } catch (\Exception $e) {
            // Return error response
            return response()->json([
                'status' => 'error',
                'message' => 'API Error: ' . $e->getMessage()
            ], 500);
        }
    }
}
