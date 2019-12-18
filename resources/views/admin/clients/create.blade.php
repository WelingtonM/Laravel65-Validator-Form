@extends('layouts.layout')

@section('content')

<div class="container">
    <h3>New Client</h3>
    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        	<li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
	<form action="{{ route('clients.store') }}" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label for="name">Name</label>
			<input  class="form-control" id="name" name="name" />
		</div>
		<div class="form-group">
			<label for="document_number">Document</label>
			<input  class="form-control" id="document_number" name="document_number" />
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input  class="form-control" id="email" name="email" />
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			<input  class="form-control" id="phone" name="phone" />
		</div>
		<div class="form-group">
			<label for="marital_status">Marital status</label>
			<select class="form-control" name="marital_status" id="marital_status">
				<option value="">Select marital status</option>
				<option value="1">Single</option>
				<option value="2">Merried</option>
				<option value="3">Divorced</option>
			</select>
		</div>
		<div class="form-group">
			<label for="date_birth">Data of Birth</label>
			<input  class="form-control" id="date_birth" name="date_birth" type="date"/>
		</div>
		<div class="radio">
			<label>
				<input name="sex" value="m" type="radio"/>Male
			</label>
		</div>
		<div class="radio">
			<label>
				<input name="sex" value="f" type="radio"/>Female
			</label>
		</div>
		<div class="form-group">
			<label for="physical_disability">Physical disability</label>
			<input  class="form-control" id="physical_disability" name="dphysical_disability"/>
		</div>
		<div class="checkbox">
			<label>
				<input id="defaulter" name="defaulter" type="checkbox" />Defaulter?
			</label>
		</div>
		<button type="submit" class="btn btn-defaul">Submit</button>
	</form>
</div>
@endsection