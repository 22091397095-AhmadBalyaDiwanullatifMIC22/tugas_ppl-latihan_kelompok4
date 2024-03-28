<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        $collect = Address::get();
        return view('address.index', compact('collect'), ['title' => 'Laravel 11 | PPL']);
    }

    public function create(){
        return view('address.create', ['title' => 'Laravel 11 | PPL']);
    }

    public function store(Request $request){
        $request->validate([
            'Street' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'Province' => 'required|string|max:255',
            'Country' => 'required|string|max:255',
            'Postal_code' => 'required|string|max:6'
        ]);

        Address::create([
            'street' => $request->Street,
            'city' => $request->City,
            'province' => $request->Province,
            'country' => $request->Country,
            'postal_code' => $request->Postal_code,
        ]);

        return redirect('/address/create')->with('status', 'Address Created!');
    }

    public function edit(int $id){
        $edit = Address::findOrFail($id);
        return view('address.edit', compact('edit', ['title' => 'Laravel 11 | PPL']));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'Street' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'Province' => 'required|string|max:255',
            'Country' => 'required|string|max:255',
            'Postal_code' => 'required|string|max:6'
        ]);

        Address::findOrFail($id)->update([
            'street' => $request->Street,
            'city' => $request->City,
            'province' => $request->Province,
            'country' => $request->Country,
            'postal_code' => $request->Postal_code,
        ]);
    }

    public function destroy(int $id){
        $destroyer = Address::findOrFail($id);
        $destroyer->delete();

        return redirect()->back()->with('status', 'Address Deleted');
    }

}
