@extends('layouts.scaffold')

@section('main')

<h1>Edit Task</h1>
{{ Form::model($task, array('method' => 'PATCH', 'route' => array('tasks.update', $task->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('project_id', 'Project_id:') }}
            {{ Form::input('number', 'project_id') }}
        </li>

        <li>
            {{ Form::label('effort', 'Effort:') }}
            {{ Form::text('effort') }}
        </li>

        <li>
            {{ Form::label('start', 'Start:') }}
            {{ Form::text('start') }}
        </li>

        <li>
            {{ Form::label('maxend', 'Maxend:') }}
            {{ Form::text('maxend') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tasks.show', 'Cancel', $task->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
