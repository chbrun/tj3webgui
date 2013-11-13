@extends('layouts.scaffold')

@section('main')

<h1>Show Task</h1>

<p>{{ link_to_route('tasks.index', 'Return to all tasks') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Description</th>
				<th>Project_id</th>
				<th>Effort</th>
				<th>Start</th>
				<th>Maxend</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $task->name }}}</td>
					<td>{{{ $task->description }}}</td>
					<td>{{{ $task->project_id }}}</td>
					<td>{{{ $task->effort }}}</td>
					<td>{{{ $task->start }}}</td>
					<td>{{{ $task->maxend }}}</td>
                    <td>{{ link_to_route('tasks.edit', 'Edit', array($task->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tasks.destroy', $task->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
