<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index() {
        $con = Contact::All();
        return view('contact', ['con' => $con]);
    }

    public function ubah($id) {
        $con = Contact::find($id);
        return view('rubah', ['con' => $con]);
    }

    public function update($id, Request $request) {
        $con = Contact::find($id);
        $con->alamat = $request->alamat;
        $con->kota = $request->kota;
        $con->telepon = $request->telepon;
        $con->fax = $request->fax;
        $con->email = $request->email;
        $con->save();
        return redirect("/contact");
    }
}
