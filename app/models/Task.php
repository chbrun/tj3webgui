<?php

class Task extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'project_id' => 'required',
		'effort' => 'required',
		'start' => 'required',
		'maxend' => 'required'
	);
}
