<?php defined('SYSPATH') or die('No direct script access.');

class Model_bill extends Model
{

	public function insertBill($name, $date, $dueDate, $amtPaid, $complete, $phoneNum, $user_id, $reference)
	{
		$result = DB::select()->from('bill')->where('user_id','=', 0)->order_by('invoiceNum', 'asc')->execute();
		$index = sizeof($result);
		$insertInvoiceNum = $result[$index - 1]['invoiceNum'];
		$insertInvoiceNum = $insertInvoiceNum + 1;

		$query = DB::insert('bill', array('name','invoiceNum','date','dueDate','amtPaid','complete','phoneNum','user_id','reference'))
		->values(array($name, $insertInvoiceNum ,$date, $dueDate, $amtPaid, $complete, $phoneNum, $user_id, $reference))->execute();
	}

	public function load($invoice_id, $user_id)
	{
		$result = DB::select()->from('bill')->where('invoiceNum','=', $invoice_id)->where('user_id','=', $user_id)->execute();
		if(sizeof($result) - 1 > 0)
		{
			//echo "Error";
			return null;
		}
		$items = DB::select()->from('item')->where('bill_id','=',$invoice_id)->execute();
		$itemArray = array();
		foreach($items as $item)
		{
			array_push($itemArray, $item);
		}
		return array($result[0], $itemArray);
	}

}
