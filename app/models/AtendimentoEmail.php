<?php

class AtendimentoEmail extends Eloquent {
    protected $table = 'atendimentoemails';
	protected $guarded = array();

	public static $rules = array(
		'email' => 'required',
		'userid' => 'required',
		'datarecebimento' => 'required',
		'dataresposta' => 'required'
	);
}
