<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use App\Note;
use Illuminate\Support\Facades\Auth;
class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    // 1    $note=new Note;     
    //    $note->body = $request->body;       
    //     $card->notes()->save($note);        
    //  2 $note = new Note(['body' => $request->body]);        
    //     $card->notes()->save($note);   
    //  3 $card->notes()->save(new Note(['body' => $request->body])); 
    //   4 $card->notes()->create(['body' => $request->body]);
    //   5  $card->notes()->create($request->all());
    //$input = $request->all();
    //$input['user_id']=Auth::id;
    $this->validate($request, [
        'body' => 'required|min:3'
    ]);
    
    $card->addNote(new Note($request->all()),2);
    
    return back();
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    public function update(Request $request,Note $note)
    {
        $note->update($request->all());
        
        return Redirect('/cards/'.$note->card_id);
    }
}
