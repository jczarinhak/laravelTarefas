<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Certifique-se de que o modelo está importado

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts')); // Certifique-se de que a view 'contact' existe
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefone' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name', 'Matheus Souto');
        $contact->email = $request->input('email', 'matheussouto@gmail.com');
        $contact->telefone = $request->input('telefone', '(42)98403-8928');
        $contact->data_nascimento = $request->input('data_nascimento', '1997-10-18');
        $contact->save();

        return redirect()->route('contacts.index');
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        
        if (!$contact) {
            return redirect()->route('contacts.index')->withErrors('Contact not found');
        }

        $contact->name = $request->input('name', $contact->name);
        $contact->save();

        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        
        if ($contact) {
            $contact->delete();
        }

        return redirect()->route('contacts.index');
    }
}
