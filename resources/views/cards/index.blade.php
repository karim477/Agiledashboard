@extends('layouts.app')

@section('content')

	<h1>Cards</h1>
	@if(count($cards) > 0)
		@foreach($cards as $card)
		<div class="well">
			<h3>{{$card->Cardtitle}}</h3>
			<small>Created on {{$card->created_at}}</small>
		</div>
		@endforeach
	@else
		<p>No Cards Found</p>
	@endif
@endsection