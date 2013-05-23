<?php defined('SYSPATH') or die('No direct script access.');

class Controller_View extends Controller_Template {

	public $template = 'receipt';

	public function action_index()
	{
		if(isset($_POST))
		{
			$user_id = $_POST['user_id'];
			$invoice = $_POST['invoiceNum'];
			$bill = new Model_bill();
			$results = $bill->load($invoice, $user_id);

			$this->template->date = $results['date'];
			$this->template->dueDate = $results['dueDate'];
			$this->template->invoiceNum = $results['invoiceNum'];

			$this->template->companyName = "DigiTechnix";
			$this->template->slogan = "Technology at your service";
			$this->template->companyPhone = "123-456-7890";
			$this->template->companyEmail = "me@me.me";

			$this->template->buyerName = "TEST";
			$this->template->buyerPhone = "TEST";
			$this->template->buyerEmail = "TEST";

			var_dump($results);
		}
	}

}