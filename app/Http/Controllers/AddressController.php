<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required'
        ]);

        // Simpan data alamat baru
        $address = new Address();
        $address->street = $request->street;
        $address->city = $request->city;
        $address->province = $request->province;
        $address->country = $request->country;
        $address->postal_code = $request->postal_code;
        $address->save();

        return response()->setJSON(['message' => 'Address created successfully']);
    }

    public function update(Request $request, $id)
    {
        // Temukan alamat berdasarkan ID
        $address = Address::findOrFail($id);

        // Validasi data yang masuk
        $request->validate([
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required'
        ]);

        // Update data alamat
        $address->update($request->all());

        return response()->setJSON(['message' => 'Address updated successfully']);
    }

    public function show($id)
    {
        // Temukan alamat berdasarkan ID
        $address = Address::findOrFail($id);

        return response()->setJSON($address);
    }

    public function index()
    {
        // Ambil daftar semua alamat
        $addresses = Address::all();

        return response()->setJSON($addresses);
    }

    public function destroy($id)
    {
        // Hapus alamat berdasarkan ID
        Address::findOrFail($id)->delete();

        return response()->setJSON(['message' => 'Address deleted successfully']);
    }
}
