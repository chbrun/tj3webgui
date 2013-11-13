<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'client_id' => 'required'
	);
}
