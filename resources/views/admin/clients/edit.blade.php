@extends('layouts.layout')

@section('content')

<div class="container">
    <h3>New Client</h3>
	@include('errors._forms_error')
	<form action="{{ route('clients.update', ['client'=>$client->id]) }}" method="post">
		{{method_field('PUT')}}
		@include('admin.clients._form')
		<button type="submit" class="btn btn-primary">Update & Save</button>
	</form>
</div>
@endsection