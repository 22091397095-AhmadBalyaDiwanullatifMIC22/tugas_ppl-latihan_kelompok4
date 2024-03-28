<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $collect = Contact::get();
        return view('contact.index', compact('collect'), ['title' => 'Laravel 11 | PPL']);
    }

    public function create(){
        return view('contact.create', ['title' => 'Laravel 11 | PPL']);
    }

    public function store(Request $request){
        $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
            'Phone' => 'required|string|max:12'
        ]);

        Contact::create([
            'first_name' => $request->First_name,
            'last_name' => $request->Last_name,
            'email' => $request->Email,
            'phone' => $request->Phone,
        ]);

        return redirect('/contact/create')->with('status', 'Contact Created!');
    }

    public function edit(int $id){
        $edit = Contact::findOrFail($id);
        return view('contact.edit', compact('edit'), ['title' => 'Laravel 11 | PPL']);
    }

    public function update(Request $request, int $id){
        $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
            'Phone' => 'required|string|max:12'
        ]);

        Contact::findOrFail($id)->update([
            'first_name' => $request->First_name,
            'last_name' => $request->Last_name,
            'email' => $request->Email,
            'phone' => $request->Phone,
        ]);

        return redirect()->back()->with('status', 'Contact Updated');
    }

    public function destroy(int $id){
        $destroyer = Contact::findOrFail($id);
        $destroyer->delete();

        return redirect()->back()->with('status', 'Contact Deleted');
    }


}
