@extends('layouts.scaffold')

@section('main')

<h1>Create Resource</h1>

{{ Form::open(array('route' => 'resources.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('manager', 'Manager:') }}
            {{ Form::text('manager') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('limit', 'Limit:') }}
            {{ Form::text('limit') }}
        </li>

        <li>
            {{ Form::label('efficiency', 'Efficiency:') }}
            {{ Form::input('number', 'efficiency') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


