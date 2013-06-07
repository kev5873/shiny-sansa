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

			$this->template->date = $results[0]['date'];
			$this->template->dueDate = $results[0]['dueDate'];
			$this->template->invoiceNum = $results[0]['invoiceNum'];

			$this->template->companyName = "DigiTechnix";
			$this->template->slogan = "Technology at your service";
			$this->template->companyPhone = "123-456-7890";
			$this->template->companyEmail = "me@me.me";

			$this->template->buyerName = "TEST";
			$this->template->buyerPhone = "TEST";
			$this->template->buyerEmail = "TEST";

			$pushItems = NULL;
			$price = 0;
			foreach($results[1] as $item)
			{
				$pushItems = "
					<tr>
						<td>".$item['itemName']."</td>
						<td colspan='2'>".$item['description']."</td>
						<td>".$item['price']."</td>
					</tr>";
				$price += $item['price'];
			}

			if($pushItems == NULL)
			{
				$this->template->items = "
					<tr>
						<td></td>
						<td colspan='2'>No Items</td>
						<td>0</td>
					</tr>";
				$this->template->totalPrice = 0;
				$this->template->amountPaid = $results[0]['amtPaid'];
				$this->template->amountDue = 0 - $results[0]['amtPaid'];
			}
			else
			{
				$this->template->items = $pushItems;
				$this->template->totalPrice = $item['price'];
				$this->template->amountPaid = $results[0]['amtPaid'];
				$this->template->amountDue = $item['price'] - $results[0]['amtPaid'];
			}

		}
	}

}