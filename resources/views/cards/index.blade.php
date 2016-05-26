@extends('layout')

@section('content')
<h1> ALL CARDS </h1>

@foreach ($cards as $card)
<div>
{{ $card->title }}
</div>
@endforeach
@stop