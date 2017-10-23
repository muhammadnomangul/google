<?php

namespace App\Http\Controllers;

use App\Tagg;
use App\Upload;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class FileEntryController extends Controller
{
    //
    public function index()
    {
        $entries = Upload::all();
        $taggs = Tagg::all();

//        dd($entries);
        return view('form', compact('entries', 'taggs'));
//        return view('entry');

    }


    public function add(Request $request) {
        $output = $request->all();

        $file = $request->file('filefield');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = new Upload();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;

        $entry->title = $output['title'];
        $entry->description = $output['description'];
        $entry->save();
        $tagData = $request->input('taggs');
        foreach ($tagData as $taggval){
             $entry->taggs()->attach($taggval);
        }

        return redirect('form');

    }
    public function search(Request $request){
        $output = $request->all();

       $search_items = Upload::all();
        dd($output);
    }

    public function get($filename){

        $entry = Upload::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);

        return (new Response($file, 200))
            ->header('Content-Type', $entry->mime);
    }

    public function edit($id){
//        $tags = DB::table('tags')->pluck('name','id');

        $entries = Upload::findorfail($id);
//        dd($article->published_at);
//        dd($entries);
        return view('edit')-> with([
            'entries' => $entries

        ]);
    }
    public function update($id , Request $request){
        $entries = Upload::findorfail($id);
        $entries->update($request->all());
        $tagIds = $request->input('taggs');
        $entries->taggs()->sync($tagIds);


        $entries = Upload::all();
        return view('form' , compact('entries',$entries));


    }

}
