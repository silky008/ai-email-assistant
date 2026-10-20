<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function generate(Request $request)
    {
        $validated = $request->validate([
            'notes'     => ['required', 'string', 'max:5000'],
            'recipient' => ['required', 'string', 'max:200'],
            'tone'      => [
                'required',
                'string',
                'in:professional,friendly,formal,persuasive',
            ],
        ]);
        return view('email-result', [
            'recipient' => $validated['recipient'] ?? '',
            'tone'      => $validated['tone'],
            'notes'     => $validated['notes'],
        ]);
    }
}
