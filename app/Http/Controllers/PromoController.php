<?php

namespace App\Http\Controllers;

use App\Models\promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public function view(){
        $promos = Promo::all();
        $data = [
            'promos' => $promos,
        ];
        return view('admin.promo.viewpromo', $data);
    }
    public function addpromo(){
        return view('admin.promo.addpromo');
    }

    public function create(Request $req)
    {
        $req->validate([
            'preview' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'information' => 'required|string',
        ]);
    
        $promos = new Promo;
    
        if ($req->hasFile('preview')) {
            $file = $req->file('preview');
            $filename = time() . '_' . $file->getClientOriginalName(); // Use a unique filename
            $file->move('promophoto/', $filename);
            $promos->preview = $filename;
        }
    
        $promos->title = $req->title;
        $promos->information = $req->information;
    
        $promos->save();
    
        return redirect()->route('promo')->with('status', 'Tambah Data Berhasil');
    }

    public function edit($id)
    {
        $promos = Promo::find($id);

        if (!$promos) {
             return redirect()->route('promo')->with('error', 'Data not found.');
        }

        return view('admin.promo.editpromo', compact('promos'));
    }

    public function update(Request $req, $id)
    {
        $promos = Promo::find($id);

        if (!$promos) {
            return redirect()->route('promo')->with('error', 'Data not found.');
        }

        $req->validate([
            'preview' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'information' => 'required|string',
        ]);

        // If a new file is uploaded, delete the old one
        if ($req->hasFile('preview')) {
            if ($promos->preview) {
                $oldFilePath = 'promophoto/' . $promos->preview;

                // Check if the old file exists before attempting to delete
                if (Storage::exists($oldFilePath)) {
                    Storage::delete($oldFilePath);
                }
                
                $file = $req->file('preview');
                $filename = time() . '_' . $file->getClientOriginalName(); // Use a unique filename
                $file->move('promophoto/', $filename);
                $promos->preview = $filename;
            }
        }

        $promos->title = $req->title;
        $promos->information = $req->information;
        $promos->save();

        return redirect()->route('promo')->with('status', 'Update Data Berhasil');
    }

    public function delete($id)
    {
        $promos = Promo::find($id);

        if (!$promos) {
            return redirect()->route('promo')->with('error', 'Data not found.');
        }
    
        // Delete the associated file if it exists
        if ($promos->preview) {
            $filePath = 'promophoto/' . $promos->preview;
    
            // Check if the file exists before attempting to delete
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
    
        $promos->delete();
    
        return redirect()->route('promo')->with('status', 'Delete Data Berhasil');
    }

    public function show($id)
    {
        $promos = Promo::find($id);

        if (!$promos) {
            // Handle not found scenario, e.g., redirect or show an error message
        }

        return view('admin.promo.detailpromo', ['promos' => $promos]);
    }

}
