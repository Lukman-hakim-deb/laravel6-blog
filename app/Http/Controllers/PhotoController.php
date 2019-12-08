<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
    	$photos = Photo::all();
        // return view('photos.index', ['photos' => $photos]);
        // return view('photos.index')->with(['photos' => $photos]);
	    return view('photos.index', compact('photos'));
    }

    public function show($id)
    {
        return view('photos.show', ['id' => $id]);
    }
}
