<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelPWA\Services\LaucherIconService;
use LaravelPWA\Services\ManifestService;

class LaravelPWAController extends Controller
{
    public function readOMR(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'omr_sheet' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store the uploaded image on the server
        $imagePath = $request->file('omr_sheet')->store('omr_images');

        // Get the full path to the image
        $imageFullPath = storage_path('app/' . $imagePath);

        // Define the Python script path
        $pythonScriptPath = public_path('omr_reader.py');

        // Run the Python script using shell_exec
        $command = escapeshellcmd("python3 $pythonScriptPath $imageFullPath");
        $output = shell_exec($command);
dd($output);
        // Return the output of the Python script
        return response()->json(['output' => $output]);
    }
    public function manifestJson()
    {
        $output = (new ManifestService)->generate();
        return response()->json($output);
    }

    public function offline(){
        return view('laravelpwa::offline');
    }
}
