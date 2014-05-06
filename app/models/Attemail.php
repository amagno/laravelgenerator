<?php

class Attemail extends Eloquent {
	protected $guarded = array();



	public static $rules = array(
		'email' => 'required|email',
		'userid' => 'required',
		'datarecebimento' => 'required|date_format:"d/m/Y"',
		'dataresposta' => 'required|date_format:"d/m/Y"'
	);

}
