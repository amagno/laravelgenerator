<?php

class Departamento extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required'
	);

    public function getUsers()
    {
        return $this->hasMany('User');
    }
}
