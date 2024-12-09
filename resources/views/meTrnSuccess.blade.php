<?php
	/**
	 * This Is the Kit File To Be included For Transaction Request/Response
	 */
	include(app_path() . '/Payment/AWLMEAPI.php');
	
	//create an Object of the above included class
	$obj = new AWLMEAPI();
	
	/* This is the response Object */
	$resMsgDTO = new ResMsgDTO();

	/* This is the request Object */
	$reqMsgDTO = new ReqMsgDTO();
	
	//This is the Merchant Key that is used for decryption also
	$enc_key = "20c9a8eb84861bd132f727e719dfd2f1";
	
	/* Get the Response from the WorldLine */
	$responseMerchant = $_REQUEST['merchantResponse'];
	
	$response = $obj->parseTrnResMsg( $responseMerchant , $enc_key );
?>
<style>
	body{
	font-family:Verdana, sans-serif	;
	font-size::12px;
	}
	.wrapper{
	width:980px;
	margin:0 auto;	
	}
	table{

	}
	tr{
		padding:5px
	}
	td{
	padding:5px;	
	}
	input{
	padding:5px;	
}
</style>

<form action="payment-status" method="post" name="successSubmit">
    @csrf
	<h4 align="center">Redirecting To Payment Please Wait..</h4>
	<h4 align="center">Please Do Not Press Back Button OR Refresh Page</h4>
    <input type="hidden" name="txnRefNo" value="<?php echo $response->getPgMeTrnRefNo(); ?>"  />
	<input type="hidden" name="orderID" value="<?php echo $response->getOrderId(); ?>"/>
	<input type="hidden" name="statusCode" value="<?php echo $response->getStatusCode(); ?>"/>
	<input type="hidden" name="statusDesc" value="<?php echo $response->getStatusDesc(); ?>"/>
	<input type="hidden" name="txnReqDate" value="<?php echo $response->getTrnReqDate(); ?>"/>
	<input type="hidden" name="amount" value="<?php echo $response->getTrnAmt(); ?>"/>
	<input type="hidden" name="responseCode" value="<?php echo  $response->getResponseCode(); ?>"/>
	<input type="hidden" name="bankRefNumber" value="<?php echo  $response->getRrn(); ?>"/>
	<input type="hidden" name="authZStatus" value="<?php echo  $response->getAuthZCode(); ?>"/>
</form>
<script type="text/javascript">
	document.successSubmit.submit();
</script>
