<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'description' => 'required',
        ]);
    
        Enquiry::create($request->all());
    
        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us. We will contact you shortly.']);
    }
}
