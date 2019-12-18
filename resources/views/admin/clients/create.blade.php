@extends('layouts.layout')

@section('content')

<div class="container">
    <h3>New Client</h3>
    <h4>{{ $clientType ==  \App\Client::TYPE_PERSON_PHYSICAL ? 'Physical Person' : 'Corporate Person' }}</h4>
    <a href="{{ route('clients.create', ['client_type' => \App\Client::TYPE_PERSON_PHYSICAL]) }}" class="btn btn-outline-primary">Physical Person</a>
    <a href="{{ route('clients.create', ['client_type' => \App\Client::TYPE_PERSON_COMMPANY]) }}" class="btn btn-outline-dark">Corporate Person</a>
    <br /><br />
  	@include('errors._forms_error')
	<form action="{{ route('clients.store') }}" method="post">
		@include('admin.clients._form')
		<button type="submit" class="btn btn-primary">Create and save</button>
	</form>
</div>
@endsection