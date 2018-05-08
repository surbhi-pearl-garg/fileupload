<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function showUploadForm()
    {
    	return view('upload');
    }
     public function storeFile(request $request)
    {
    	if($request->hasFile('file'))
    	{
    		$filename = $request->file->getClientOriginalName();
    		$filesize = $request->file->getClientSize();
    		$request->file->storeAs('public/upload',$filename);
    		$file=new File;
    		$file->name = $filename;
    		$file->size = $filesize;
    		$file->save();
    		return 'yes';
    	}
    	return $request->all(); 
    }
}
