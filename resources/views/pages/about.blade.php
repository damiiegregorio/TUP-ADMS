@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>
<p>
	{{-- @if(count($chars)>0)
		@foreach($chars as $char)
			<ul>
				<li>{{ $char }}</li>
			</ul>
		@endforeach
	@endif --}}

	This is the about tab
	DAMIIE GREGORIO
	<hr>
	DAM
</p>

//Testing
{{Form::submit('Testing', ['class' => 'btn btn-primary'])}}

@endsection