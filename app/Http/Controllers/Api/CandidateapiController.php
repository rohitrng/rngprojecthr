<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;

class CandidateapiController extends Controller{
    public function candidateform(Request $request) {
        // Validate the request inputs
        $validator = Validator::make($request->all(), [
            'candidate_name' => 'required|string',
            'candidate_mobile' => 'required|max:20',
            'candidate_profile' => 'required|string',
            'candidate_email' => 'required|email',
            'user_id' => 'required|string',
        ]);
    
        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        // Initialize data array to insert
        $data = [
            'candidate_name' => $request->candidate_name,
            'candidate_mobile' => $request->candidate_mobile,
            'candidate_profile' => $request->candidate_profile,
            'candidate_email' => $request->candidate_email,
            'user_id' => $request->user_id,
        ];
    
        // Handle file upload for candidate resume
        if ($request->hasFile('candidate_resume')) {
            // Get the uploaded file
            $file = $request->file('candidate_resume');
            
            // Move the file to the 'resumes' directory in public path and store its path
            $filePath = $file->move(public_path('resumes'), $file->getClientOriginalName());
            
            // Store the relative path of the file in the data array
            $data['candidate_resume'] = 'resumes/' . $file->getClientOriginalName();
        } else {
            // Set resume path to null if no file is uploaded
            $data['candidate_resume'] = null;
        }
    
        // Insert data into the database
        $insert = DB::connection('dynamic')->table('candidate_resume')->insert($data);
    
        // Check if the insertion was successful
        if ($insert) {
            return response()->json([
                'success' => true,
                'message' => 'Add candidate successful',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to add candidate',
            ], 500); // Changed to 500 for server error
        }
    }
}
?>