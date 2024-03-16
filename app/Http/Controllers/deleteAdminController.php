<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class deleteAdminController extends Controller
{
    //
    public function deleteImage($id) {
        // Hardcode the file name to be deleted
        
        // Construct the file path
    
        // Check if the file exists before attempting to delete
        if (Storage::disk('public_articles')->exists($id)) {
            // File exists, proceed with deletion
            Storage::disk('public_articles')->delete($id);
            // Optionally, you can also delete any associated database records or perform additional tasks
            return "File '{$id}' deleted successfully.";
        } else {
            // File not found
            return "File '{$id}' not found.";
        }
    }
}