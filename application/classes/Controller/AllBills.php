<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AllBills extends Controller_Template {

	public $template = 'main';

	public function action_index()
	{
		$result = DB::select()->from('bill')->execute()->as_array();
		if(empty($result))
		{
			echo "KABOOM";
		}
		else
		{
			echo '
			<table width="100%">
				<tr>
					<td>Invoice ID</td>
					<td>Name</td>
					<td>Last Update</td>
					<td>Due Date</td>
					<td>Paid</td>
					<td>Status</td>
					<td>Action</td>
				</tr>';

			foreach ($result as $bill) {
				echo '
				<tr>
					<td>'.$bill['id'].'</td>
					<td>'.$bill['name'].'</td>
					<td>'.$bill['date'].'</td>
					<td>'.$bill['dueDate'].'</td>
					<td>'.$bill['amtPaid'].'</td>
					<td>'.$bill['status'].'</td>
					<td>View|Payment|Edit|Delete|Log</td>
				</tr>
				';
			}

			echo '
			</table>
			';
			foreach ($result as $bill) {
				echo $bill['id'];
				echo $bill['name'];
				echo $bill['date'];
				echo $bill['dueDate'];
				echo $bill['amtPaid'];
				echo $bill['complete'];
				echo $bill['status'];
				echo $bill['phoneNum'];
				echo $bill['reference'];
			}
		}
	}

}