<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    public function index()
    {
        $pakaian = Pakaian::all();
        return view('pakaian.index', compact('pakaian'));
    }

    public function create()
    {
        return view('pakaian.create');
    }

    public function store(Request $request)
    {
        // Validate and create pakaian
    }

    public function edit($id)
    {
        $pakaian = Pakaian::findOrFail($id);
        return view('pakaian.edit', compact('pakaian'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update pakaian
    }

    public function destroy($id)
    {
        // Delete pakaian
    }
}