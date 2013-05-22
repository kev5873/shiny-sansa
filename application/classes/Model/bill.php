<?php defined('SYSPATH') or die('No direct script access.');

class Model_bill extends Model
{

	public function insertBill($name, $date, $amtPaid, $complete, $phoneNum, $user_id, $reference)
	{
		$query = DB::insert('bill', array('name','date','amtPaid','complete','phoneNum','user_id','reference'))
		->values(array($name, $date, $amtPaid, $complete, $phoneNum, $user_id, $reference))->execute();
	}

	public function load($invoice_id)
	{
		$result = DB::select()->from('bill')->execute()->as_array();
		echo $result;
	}

}
