<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
    public function addNote(Note $note , $userID)
    {
            $note->user_id = $userID;
       return $this->notes()->save($note);

    }
}