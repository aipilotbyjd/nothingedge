<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactUsPageController extends Controller
{
    public function index()
    {
        return view("pages.contact-us.index");
    }

    public function ContactUsForm(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:50',
                'tel' => 'required|string|max:20',
                'message' => 'required|string',
            ]);

            $contactForm = ContactForm::create($validatedData);

            return response()->json(['message' => 'Message sent successfully!', 'data' => $contactForm], 200);
        } catch (\Exception $e) {
            logger()->error('Error submitting contact form: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing your request. Please try again later.'], 500);
        }
    }
}
