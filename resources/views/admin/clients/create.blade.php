@extends('layouts.layout')

@section('content')

<div class="container">
    <h3>New Client</h3>
  	@include('errors._forms_error')
	<form action="{{ route('clients.store') }}" method="post">
		@include('admin.clients._form')
		<button type="submit" class="btn btn-defaul">Create and save</button>
	</form>
</div>
@endsection