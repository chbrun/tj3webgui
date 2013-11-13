<?php

class Resource extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'manager' => 'required',
		'email' => 'required',
		'limit' => 'required',
		'efficiency' => 'required'
	);
}
