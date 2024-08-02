<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function view(){
        $articles = Article::all();
        $data = [
            'articles' => $articles,
        ];
        return view('admin.article.viewarticle', $data);
    }
    
    public function addarticle(){
        return view('admin.article.addarticle');
    }

    public function create(Request $req)
    {
        $req->validate([
            'preview' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'text' => 'required|string',
        ]);
    
        $articles = new Article;
    
        if ($req->hasFile('preview')) {
            $file = $req->file('preview');
            $filename = time() . '_' . $file->getClientOriginalName(); // Use a unique filename
            $file->move('articlephoto/', $filename);
            $articles->preview = $filename;
        }
    
        $articles->title = $req->title;
        $articles->text = $req->text;
    
        $articles->save();
    
        return redirect()->route('article')->with('status', 'Tambah Data Berhasil');
    }

    public function edit($id)
    {
        $articles = Article::find($id);

        if (!$articles) {
             return redirect()->route('article')->with('error', 'Data not found.');
        }

        return view('admin.article.editarticle', compact('articles'));
    }

    public function update(Request $req, $id)
    {
        $articles = Article::find($id);

        if (!$articles) {
            return redirect()->route('article')->with('error', 'Data not found.');
        }

        $req->validate([
            'preview' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'text' => 'required|string',
        ]);

        // If a new file is uploaded, delete the old one
        if ($req->hasFile('preview')) {
            if ($articles->preview) {
                $oldFilePath = 'articlephoto/' . $articles->preview;

                // Check if the old file exists before attempting to delete
                if (Storage::exists($oldFilePath)) {
                    Storage::delete($oldFilePath);
                }
                
                $file = $req->file('preview');
                $filename = time() . '_' . $file->getClientOriginalName(); // Use a unique filename
                $file->move('articlephoto/', $filename);
                $articles->preview = $filename;
            }
        }

        $articles->title = $req->title;
        $articles->text = $req->text;
        $articles->save();

        return redirect()->route('article')->with('status', 'Update Data Berhasil');
    }

    public function delete($id)
    {
        $articles = Article::find($id);

        if (!$articles) {
            return redirect()->route('article')->with('error', 'Data not found.');
        }
    
        // Delete the associated file if it exists
        if ($articles->preview) {
            $filePath = 'articlephoto/' . $articles->preview;
    
            // Check if the file exists before attempting to delete
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
    
        $articles->delete();
    
        return redirect()->route('article')->with('status', 'Delete Data Berhasil');
    }

    public function show($id)
    {
        $articles = Article::find($id);

        if (!$articles) {
            // Handle not found scenario, e.g., redirect or show an error message
        }

        return view('admin.article.detailarticle', ['articles' => $articles]);
    }

}

