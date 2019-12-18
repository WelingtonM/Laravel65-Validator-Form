 {{csrf_field()}} 
<div class="form-group">
	<label for="name">Name</label> <input class="form-control" id="name"
		name="name" value="{{old('name',$client->name)}}" />
</div>
<div class="form-group">
	<label for="document_number">Document</label> <input
		class="form-control" id="document_number" name="document_number"
		value="{{old('document_number',$client->document_number)}}" />
</div>
<div class="form-group">
	<label for="email">E-mail</label> <input class="form-control"
		id="email" name="email" value="{{old('email',$client->email)}}" />
</div>
<div class="form-group">
	<label for="phone">Phone</label> <input class="form-control" id="phone"
		name="phone" value="{{old('phone',$client->phone)}}" />
</div>

@if($clientType == \App\Client::TYPE_PERSON_PHYSICAL)

@php
	$maritalStatus = $client->marital_status;
@endphp

<div class="form-group">
	<label for="marital_status">Marital status</label> <select
		class="form-control" name="marital_status" id="marital_status"
		value="{{old('marital_status',$maritalStatus)}}">
		<option value="">Select marital status</option>
		<option value="1" {{old('marital_status',$maritalStatus) == 1 ?'selected="selected"':''}}>Single</option>
		<option value="2" {{old('marital_status',$maritalStatus) == 2 ?'selected="selected"':''}}>Merried</option>
		<option value="3" {{old('marital_status',$maritalStatus) == 3 ?'selected="selected"':''}}>Divorced</option>
	</select>
</div>

    <div class="form-group">
    	<label for="date_birth">Data of Birth</label> <input
    		class="form-control" id="date_birth" name="date_birth" type="date"
    		value="{{old('date_birth',$client->date_birth)}}" />
    </div>
    <div class="radio">
    	<label> <input name="sex" value="m" type="radio" {{old('sex',$client->sex) ==
    		'm'?'checked="checked"':''}} />Male
    	</label>
    </div>
    <div class="radio">
    	<label> <input name="sex" value="f" type="radio" {{old('sex',$client->sex) ==
    		'f'?'checked="checked"':''}}/>Female
    	</label>
    </div>
    <div class="form-group">
    	<label for="physical_disability">Physical disability</label> <input
    		class="form-control" id="physical_disability"
    		name="physical_disability" value="{{old('physical_disability',$client->physical_disability)}}" />
    </div>
@else
    <div class="form-group">
    	<label for="company_name">Company Name</label> <input class="form-control" id="company_name"
    		name="company_name" value="{{old('company_name',$client->company_name)}}" />
    </div>
@endif
<div class="checkbox">
	<label> <input id="defaulter" name="defaulter" type="checkbox"
		{{old('defaulter',$client->defaulter)?'checked="checked"':''}}/>Defaulter?
	</label>
</div>
<a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>