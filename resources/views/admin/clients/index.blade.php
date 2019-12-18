@extends('layouts.layout')

@section('content')
    <h3>Clients List</h3>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">New Client</a><br /><br />
    <table class="table table-striped table-dark">
    	<thead class="thead-dark">
    		<tr>
    			<th>ID</th>
    			<th>Name</th>
    			<th>CNPJ/CPF</th>
    			<th>Date Birth</th>
    			<th>E-mail</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    	@foreach($clients as $client)
    		<tr>
    			<td>{{ $client->id }}</td>
    			<td>{{ $client->name }}</td>
    			<td>{{ $client->document_number }}</td>
    			<td>{{ $client->date_birth }}</td>
    			<td>{{ $client->email }}</td>

    			<td>
    				<a href="{{route('clients.edit', ['client'=>$client->id])}}" class="btn btn-sm btn-info">Edit</a>
    				<a href="{{route('clients.show', ['client'=>$client->id])}}" class="btn btn-sm btn-success">Show</a>
    			</td>
    		</tr>
    	@endforeach
    	</tbody>
    </table>
@endsection