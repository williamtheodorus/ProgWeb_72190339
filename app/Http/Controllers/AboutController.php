<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desc;

class AboutController extends Controller
{
    public function index() {
        $desc = Desc::All();
        return view('about', ['desc' => $desc]);
    }

    public function ubah($id) {
        $desc = Desc::find($id);
        return view('ganti', ['desc' => $desc]);
    }

    public function update($id, Request $request) {
        $desc = Desc::find($id);
        $desc->desc = $request->desc;
        $desc->save();
        return redirect("/about");
    }
}
