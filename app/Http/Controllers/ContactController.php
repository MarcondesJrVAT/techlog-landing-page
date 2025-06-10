<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'content' => 'required|string|max:3000',
        ]);

        Mail::to('marcondes.junior@vat.com.br', 'Marcondes Junior')
            ->send(new Contact([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'content' => $request->input('content'),
                ]
            ));
        return redirect()->back()->with('success', 'Formulário enviado com sucesso! Em breve entraremos em contato!!');
    }
}
