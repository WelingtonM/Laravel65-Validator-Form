@extends('layouts.layout')

@section('content')
<h3>Client : {{$client->name}}</h3>
<br /><br />
<a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
<a href="{{route('clients.edit', ['client'=>$client->id])}}" class="btn btn-info">Edit client</a><br /><br />
<table class="table table-striped table-dark">
	<tbody>
		<tr>
			<th scope="row">ID</th>
			<td>{{$client->id}}</td>
		</tr>
		<tr>
			<th scope="row">Name</th>
			<td>{{$client->name}}</td>
		</tr>
		<tr>
			<th scope="row">Document</th>
			<td>{{$client->document_number}}</td>
		</tr>
		<tr>
			<th scope="row">E-mail</th>
			<td>{{$client->email}}</td>
		</tr>
		<tr>
			<th scope="row">Phone</th>
			<td>{{$client->phone}}</td>
		</tr>
		<tr>
			<th scope="row">Matirial State</th>
			<td>
			@switch($client->marital_status)
            	@case(1)
            		Single
            		@break
            	@case(2)
            		Married
            		@break
            	@case(3)
            		Divorced
            		@break
            @endswitch
			</td>
		</tr>
		<tr>
			<th scope="row">Date Birth</th>
			<td>{{$client->date_birth}}</td>
		</tr>
		<tr>
			<th scope="row">Sex</th>
			<td>{{ $client->sex == 'm' ? 'Male' : 'Female' }}</td>
		</tr>
		<tr>
			<th scope="row">Physical disability</th>
			<td>{{$client->physical_disability}}</td>
		</tr>
		<tr>
			<th scope="row">Defaulter</th>
			<td>{{ $client->defaulter ? 'Yes' : 'No' }}</td>
		</tr>
	</tbody>
</table>
@endsection