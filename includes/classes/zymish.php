<?php
/*------------------------
	Zymish core class
	Written by Adrian Smith
	Version: 1.0
------------------------*/
if(class_exists('zymish')) return;
abstract class zymish
{
	protected $error;
	protected $opts;
	
	function __construct($opts = array())
	{
		$this->opt = $opts;
	}
	
	/* add_error(); Adds visible errors */
	protected function add_error($desc,$type='error')
	{
		$this->error = array('type'=>$type,'desc'=>$desc);
	}
	
	/* get_error(); Gets most recent error */
	public function get_error()
	{
		if(!empty($this->error['desc']))
			return $this->error['desc']
		return false;
	}
}?>