<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function view(){
        $products = Product::all();
        $data = [
            'products' => $products,
        ];
        return view('admin.product.viewproduct', $data);
    }
    public function addproduct(){
        return view('admin.product.addproduct');
    }

    public function create(Request $req)
    {
        $req->validate([
            'preview' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'information' => 'required|string',
        ]);
    
        $product = new Product;
    
        if ($req->hasFile('preview')) {
            $file = $req->file('preview');
            $filename = time() . '_' . $file->getClientOriginalName(); // Use a unique filename
            $file->move('productphoto/', $filename);
            $product->preview = $filename;
        }
    
        $product->title = $req->title;
        $product->information = $req->information;
    
        $product->save();
    
        return redirect()->route('product')->with('status', 'Tambah Data Berhasil');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
             return redirect()->route('product')->with('error', 'Data not found.');
        }

        return view('admin.product.editproduct', compact('product'));
    }

    public function update(Request $req, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product')->with('error', 'Data not found.');
        }

        $req->validate([
            'preview' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'information' => 'required|string',
        ]);

        // If a new file is uploaded, delete the old one
        if ($req->hasFile('preview')) {
            if ($product->preview) {
                $oldFilePath = 'productphoto/' . $product->preview;

                // Check if the old file exists before attempting to delete
                if (Storage::exists($oldFilePath)) {
                    Storage::delete($oldFilePath);
                }
                
                $file = $req->file('preview');
                $filename = time() . '_' . $file->getClientOriginalName(); // Use a unique filename
                $file->move('productphoto/', $filename);
                $product->preview = $filename;
            }
        }

        $product->title = $req->title;
        $product->information = $req->information;
        $product->save();

        return redirect()->route('product')->with('status', 'Update Data Berhasil');
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product')->with('error', 'Data not found.');
        }
    
        // Delete the associated file if it exists
        if ($product->preview) {
            $filePath = 'productphoto/' . $product->preview;
    
            // Check if the file exists before attempting to delete
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
    
        $product->delete();
    
        return redirect()->route('product')->with('status', 'Delete Data Berhasil');
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            // Handle not found scenario, e.g., redirect or show an error message
        }

        return view('admin.product.detailproduct', ['product' => $product]);
    }

}