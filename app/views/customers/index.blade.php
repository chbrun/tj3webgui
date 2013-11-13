@extends('layouts.scaffold')

@section('main')

<h1>All Customers</h1>

<p>{{ link_to_route('customers.create', 'Add new customer') }}</p>

@if ($customers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($customers as $customer)
				<tr>
					<td>{{{ $customer->name }}}</td>
					<td>{{{ $customer->description }}}</td>
                    <td>{{ link_to_route('customers.edit', 'Edit', array($customer->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('customers.destroy', $customer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no customers
@endif

@stop
