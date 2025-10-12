<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'nullable|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan ke database
        $message = ContactMessage::create($validated);

        // Kirim email ke admin
        Mail::to('info@desaairsenggeris.desa.id')->send(new ContactMessageMail($message));

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim dan diterima oleh tim kami.');
    }
}
