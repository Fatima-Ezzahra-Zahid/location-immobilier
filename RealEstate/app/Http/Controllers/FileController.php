<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function index()
    {

      return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
          'files' => 'required',
        ]);
      
        if ($request->hasfile('files')) {
            $files = $request->file('files');


            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('image', $name, 'public');
               


                File::create([
                    'name' => $name,
                    'path' => '/storage/'.$path
                  ]);
            }
         }
         
        return back()->with('success', 'Files uploaded successfully');
    }
}