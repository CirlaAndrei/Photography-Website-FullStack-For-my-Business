<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\BookingConfirmation;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'package' => 'required|string',
            'project-type' => 'required|string',
            'date' => 'nullable|date',
            'message' => 'required|string',
            'newsletter' => 'nullable',
            'privacy' => 'accepted'
        ]);
        
        // Save to database - convert checkbox value to boolean
        $submission = ContactSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'package' => $validated['package'],
            'project_type' => $validated['project-type'],
            'preferred_date' => $validated['date'] ?? null,
            'message' => $validated['message'],
            'newsletter' => $request->has('newsletter'),
            'privacy_accepted' => true
        ]);
        
        // Send confirmation email to client
        try {
            Mail::to($submission->email)->send(new BookingConfirmation($submission));
            
            // Optional: Also send notification to yourself
            // Uncomment if you want to receive emails too
            // Mail::to('cirlaandrei7@yahoo.com')->send(new BookingConfirmation($submission));
            
        } catch (\Exception $e) {
            Log::error('Email failed: ' . $e->getMessage());
            // Don't fail the form submission if email fails
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Booking request submitted successfully! Check your email for confirmation.',
            'submission_id' => $submission->id
        ]);
    }
    
    // Admin view
    public function index()
    {
        $submissions = ContactSubmission::latest()->get();
        
        return view('admin.submissions', [
            'submissions' => $submissions
        ]);
    }
    
    // Delete submission
    public function destroy($id)
    {
        $submission = ContactSubmission::findOrFail($id);
        $submission->delete();
        
        return redirect('/admin/submissions')->with('success', 'Submission deleted successfully.');
    }
    
    // Export as JSON (optional)
    public function export()
    {
        $submissions = ContactSubmission::all();
        return response()->json($submissions);
    }
}