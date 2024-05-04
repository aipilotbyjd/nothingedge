<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;


class ContactUsPageController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("pages.contact-us.index");
    }

    public function ContactUsForm(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:50',
                'tel' => 'required|string|max:20',
                'message' => 'nullable|string|max:20',
            ]);

            $contactForm = ContactForm::create($validatedData);

            Mail::to('nothingedgetechnology@gmail.com')->send(new ContactFormSubmitted($validatedData));

            return response()->json(['message' => 'Message sent successfully!', 'data' => $contactForm], 200);
        } catch (\Exception $e) {
            logger()->error('Error submitting contact form: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing your request. Please try again later.'], 500);
        }
    }
}
