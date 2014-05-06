<?php

class Teste extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nome' => 'required',
		'sobrenome' => 'required',
		'idade' => 'required'
	);
}
