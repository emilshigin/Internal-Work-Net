<?php

namespace App\Http\Controllers;
use App\Models\Buyer;


use Illuminate\Http\Request;

class CustomerSupportController extends Controller
{
    public function index(){
        return view('app.customersupport');
    }

    public function update(Request $request, Buyer $buyer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $buyer->update($validated);

        return redirect()->back()->with('success', 'Buyer name updated.');
    }


}
