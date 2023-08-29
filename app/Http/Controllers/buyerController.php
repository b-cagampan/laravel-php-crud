<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class buyerController extends Controller
{
    public function index()
    {
        // get all records from products table
        // save to a variable call $buyers
        $user = Buyer::all();

        return view('buyers.index', [
            'buyers' => $user
        ]);
    }

    public function create() {
        return view('buyers.create');
    }

    public function store(Request $request) {
        Buyer::create([
            'username' => $request->username,
            'password' => $request->password,
            'city' => $request->city,
            'country' => $request->country
        ]);

        return redirect('buyers.index');
    }

    public function view(Buyer $buyer) {
        return view('buyers.view',['buyer' => $buyer]);
    }

    public function edit(Buyer $buyer) {
        return view('buyers.edit', ['buyer' => $buyer]);
    }

    public function update(Buyer $buyer, Request $request) {
        $buyer->update($request->all());

        return redirect()->back();
    }

    public function delete(Buyer $buyer) {
        $buyer->delete();

        return redirect()->back();
    }
}
