<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Create extends Controller_Template {

	public $template = 'main';

	public function action_index()
	{
		$bill = new Model_bill();
		$bill->insertBill('Cat','2013-12-30','500.00',true,'123-456-7890','0','none');
	}

}