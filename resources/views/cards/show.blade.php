@extends('layout')

@section('content')
      <div class="row">
           <div class="col-md-6 col-md-offset-3">
                  <h1>{{ $card->title }}</h1>
                  
                  <ul class="list-group">
                        @foreach($card->notes as $note)
                  
                        <div style="height:50px"> <li class="list-group-item">{{ $note->body }}
                              <a href="#" style="float:center">{{$note->user->user_id}}</a>
                        <button onClick="location.href='/notes/{{ $note->id }}/edit'" style="position: absolute; right: 5px; top: 0;" class="btn btn-primary" >Edit</button> </li>
                              </div>

                        @endforeach
                  </ul>
                  <hr>
                  <h3> Add a new note </h3>

                  <form method="POST" action="/cards/{{ $card->id }}/notes">
                        <div class="form-group">
                              <textarea name="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                              <button type="submit" class="btn btn-primary">Add Note</button>
                        </div>                        
                  </form>
                  
            </div>
      </div>
@stop