<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	include('header.php');
    include('container.php');
?>
<div class="container">
	<h2>JLPT PAYMENT</h2>	
	<br>
	<br>
	<form method="post" action="pgRedirect.php">
			
					
					<label>CUSTID ::</label>
				<b>	<INPUT id="CUST_ID"  maxlength="12" size="12" name="CUST_ID" readonly autocomplete="off" value="<?php echo  "CUST" . rand(10000,99999999)?>"></b>
		<label>NAME</label>		<b>	<INPUT id="NAME"  maxlength="100" size="12" name="NAME"  autocomplete="off" required></b>
		<label>EMAIL ID ::</label>		<b>	<INPUT id="EMAIL"  maxlength="100" size="12" name="EMAIL"  autocomplete="off" required></b>
		<label>MOBILE NUMBER ::</label>		<b>	<INPUT id="MOBILE"  maxlength="10" size="12" name="MOBILE"  autocomplete="off" required></b>
		<table border="1" >
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Exam</th>
					<th>Amount</th>
				</tr>
				<tr hidden>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
			
				<tr hidden>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr hidden>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>N5</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="Pay Now" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		<h1> Amount you need to pay for N5:RS.1</h1>

	</form>
	
<?php include('footer.php');?>