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
	<form action="{{ route('clients.update', ['client'=>$client->id]) }}" method="post">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<div class="form-group">
			<label for="name">Name</label>
			<input  class="form-control" id="name" name="name" value="{{$client->name}}" />
		</div>
		<div class="form-group">
			<label for="document_number">Document</label>
			<input  class="form-control" id="document_number" name="document_number" value="{{$client->document_number}}"  />
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input  class="form-control" id="email" name="email" value="{{$client->email}}" />
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			<input  class="form-control" id="phone" name="phone" value="{{$client->phone}}" />
		</div>
		<div class="form-group">
			<label for="marital_status">Marital status</label>
			<select class="form-control" name="marital_status" id="marital_status" value="{{$client->status}}" >
				<option value="">Select marital status</option>
				<option value="1" {{$client->marital_status == 1 ?'selected="selected"':''}}>Single</option>
				<option value="2" {{$client->marital_status == 2 ?'selected="selected"':''}}>Merried</option>
				<option value="3" {{$client->marital_status == 3 ?'selected="selected"':''}}>Divorced</option>
			</select>
		</div>
		<div class="form-group">
			<label for="date_birth">Data of Birth</label>
			<input  class="form-control" id="date_birth" name="date_birth" type="date" value="{{$client->date_birth}}" />
		</div>
		<div class="radio">
			<label>
				<input name="sex" value="m" type="radio" {{$client->sex == 'm'?'checked="checked"':''}} />Male
			</label>
		</div>
		<div class="radio">
			<label>
				<input name="sex" value="f" type="radio" {{$client->sex == 'f'?'checked="checked"':''}}/>Female
			</label>
		</div>
		<div class="form-group">
			<label for="physical_disability">Physical disability</label>
			<input  class="form-control" id="physical_disability" name="physical_disability" value="{{$client->physical_disability}}" />
		</div>
		<div class="checkbox">
			<label>
				<input id="defaulter" name="defaulter" type="checkbox" {{$client->defaulter?'checked="checked"':''}}/>Defaulter?
			</label>
		</div>
		<button type="submit" class="btn btn-defaul">Submit</button>
	</form>
</div>
@endsection