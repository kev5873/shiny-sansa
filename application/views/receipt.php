<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
	#container
	{
		width: 960px;
		margin-top: 30px;
		margin-left:auto;
		margin-right:auto;
	}
	#content
	{
		margin-top:20px;
		margin-bottom:20px;
	}
	#leftfloat
	{
		float:right;
	}

</style>
<title>Receipt #<?=$invoiceNum?> | <?=$companyName?></title>
</head>

<body>
<div id="container">
	<div id="header">
    
    <div id="leftfloat">
    RECEIPT<br /><br />
    Date: <?=$date?><br />
    Due Date: <?=$dueDate?><br />
    Invoice Number: #<?=$invoiceNum?>
    </div>
    
    <?=$companyName?><br />
    <?=$slogan?><br /><br />
    <?=$companyPhone?><br />
	<?=$companyEmail?><br /><br />

    Billed to:<br />
    <?=$buyerName?><br />
	<?=$buyerPhone?><br />
    <?=$buyerEmail?><br />
    
    </div>
    <div id="content">
		<table width="100%" style="border: 1px dashed #ffffff;">
			<tr>
				<td width="15%">Item</td>
				<td colspan="2">Description</td>
				<td width="10%">Amount</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td colspan="2">&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="3">&nbsp;</td>
				<td width="10%">Total</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="10%">Paid</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="10%">Due</td>
				<td>&nbsp;</td>
			</tr>
		</table>
    </div>
    <div id="footer">
    	No refunds!  Thank you!
    </div>
</div>
</body>
</html>
