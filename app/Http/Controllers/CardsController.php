<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        
        return view('cards.index', compact('cards'));
        
    }
    public function show(Card $card)
    {   
         $card->load('notes.user');
         return view('cards.show', compact('card'));
        // $card=Card::with('notes')->find(1);
        // return $card->notes[0]->users;
    }
}
 