<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Guardar el mensaje en la base de datos
        Contact::create($validated);

        // Enviar el correo
        Mail::to('your-email@gmail.com')->send(new ContactMessage($validated));

        return redirect()->route('contact.show')->with('success', 'Mensaje enviado correctamente.');
    }
}
