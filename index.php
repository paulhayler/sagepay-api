<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Brighton Executive Cars - Book airport transfers or business travel</title>
		<meta name="description" content="Contact Brighton Executive Cars to book an airport transfer, business travel or  wedding car chauffeur in Brighton &amp; Hove and throughout Sussex">
		<link rel="icon" href="../contact/images/favicons/favicon.ico">
		<link rel="apple-touch-icon" href="../contact/images/favicons/apple-touch-icon.png">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
 	<link rel="stylesheet" href="../css/bootstrap.min.css">
 	<link rel="stylesheet" href="../css/style.css">
 	<link rel="stylesheet" href="../css/blue.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66343534-1', 'auto');
  ga('send', 'pageview');

</script>
<style type="text/css">
legend {color: #fff;} </style>
	</head>

	<body>

		<div id="document" class="document">

		<?php include ('../includes/nav.php'); ?>

	<section id="about" class="about-section section section-dark" style="padding-top: 180px;">

				<div class="container">

					<h1 class="section-heading text-center">Make a Payment to Brighton Executive Cars</h1>
					<div class="row">

						<div class="col-md-7 col-sm-8">
							<h3 style="color:#f33">Please make sure your booking is confirmed before making a payment!</h3>
                            <p>To book a car or make an enquiry about any of our services, please contact us FIRST:</p>

							<ul>
								<li>T: +44 (0)1273 255355</li>
                                <li>E: <a href="mailto:info@brightonexecutivecars.co.uk">info@brightonexecutivecars.co.uk</a></li>
                             </ul>
							<p>When you have your booking confirmation from Brighton Executive Cars and have been issued with a payment reference please use the payment gateway below.</p>
          <?php
include('BecPaymentController.php');
$becpay = new BecPaymentController();
if(isset($_POST['ordernumber'])):
    $paymentString = "Amount=".$_POST['amount']."&VendorTxCode=".date('mdY')."-".$_POST['ordernumber']."&Currency=GBP&Description=".$_POST['ordernumber']."&CustomerName=".$_POST['fname']." ".$_POST['lname']."&BillingFirstnames=".$_POST['fname']."&BillingSurname=".$_POST['lname']."&CustomerEMail=".$_POST['email']."&BillingAddress1=Street&BillingCity=Town&BillingPostcode=Postcode&BillingCountry=GB&DeliveryCountry=GB&DeliveryFirstnames=First Name&DeliverySurname=Surname&DeliveryAddress1=Street&DeliveryCity=City&DeliveryPostcode=Postcode&SuccessURL=http://www.brightonexecutivecars.co.uk/payments/success.php&FailureURL=http://www.brightonexecutivecars.co.uk/payments/failure.php";
?>
<form method="POST"  action="https://test.sagepay.com/gateway/service/vspform-register.vsp">
    <p><?php echo "Name: ".$_POST['fname']." ".$_POST['lname']; ?><br />
    <?php echo "Email Address: ".$_POST['email'] ?><br />
    <?php echo "Order Number: ".$_POST['ordernumber'];?><br />
    <?php echo "Amount: &pound;".$_POST['amount']; ?></p>
<input type="hidden" name="VPSProtocol" value= "3.00">
<input type="hidden" name="TxType" value= "PAYMENT">
<input type="hidden" name="Vendor" value= "brightonexecuti">
    <input type="hidden" name="Crypt" value= "<?php echo SagepayUtil::encryptAes($paymentString, $becpay->key); ?>" >
    <p><button name="submit">Pay Now</button></p>
</form>
<?php
else:
?>

    <form method="POST" id="SagePayForm" action="#">
<fieldset>
<legend>Brighton Executive Cars Online Payments</legend>
        <p class="form-group"><label for="fname">First Name:</label><br>
<input type="text" name="fname" class="form-control" id="fname"  placeholder="First Name" />
        </p>
        <p class="form-group"><label for="lname">Last Name:</label><br>
<input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" />
        </p>
        <p class="form-group"><label for="email">Email:</label><br>
<input type="email" name="email" class="form-control" id="email" placeholder="Email" />
        </p>
        <p class="form-group"><label for="ordernumber">Payment Reference Number:</label><br>
<input type="text" name="ordernumber" class="form-control" id="ordernumber" placeholder="Payment Reference Number" />
        </p>
        <p class="form-group"><label for="amount">Amount:</label><br>
<input type="text" name="amount" class="form-control" id="amount" placeholder="Amount" />
        </p>
        <p class="form-group"><button name="submit" class="btn btn-primary btn-lg btn-block">Continue payment</button></p>
        </fieldset>
    </form>

<?php
endif;
?>
  </div>
  
    <div class="col-md-4 col-md-push-1 col-sm-4">
                        	<div class="hiw-item">
								<div class="hiw-item-text">	
                        			<p style="font-size: 90%">We accept all major credit cards.<br><img src="../images/Payment-Credit-Card.png" alt="We accept all major credit cards" width="100" ></p>
                                    <p style="font-size: 90%">Payment must be made in advance once the booking has been confirmed.</p>
                                  </div>
                               </div>
                        </div>
 </div>
					</div>
				</section>
			
<?php include ('../includes/footer.php'); ?>

	</body>
</html>