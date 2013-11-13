@extends('layouts.scaffold')

@section('main')

<h1>Edit Resource</h1>
{{ Form::model($resource, array('method' => 'PATCH', 'route' => array('resources.update', $resource->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('resources.show', 'Cancel', $resource->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
