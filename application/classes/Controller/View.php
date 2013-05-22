<?php defined('SYSPATH') or die('No direct script access.');

class Controller_View extends Controller_Template {

	public $template = 'main';

	public function action_index()
	{
		$bill = new Model_bill();
		$bill->load(2);
	}

}