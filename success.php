<?php
include('BecPaymentController.php');
$becpay = new BecPaymentController();

if ($_REQUEST['crypt']) :
    $responseArray = \SagepayUtil::decryptAes($_REQUEST['crypt'],$becpay->key);
    parse_str($responseArray,$output);
    //Check status of response
    if($output["Status"] ==='OK'):
        // Success
        echo '<h3>Thankyou for making your payment. You will receive an email confirmation shortly</h3>';

    elseif($output["Status"] === "ABORT"):
    // Payment Cancelled
        echo '<h3>Your appeared to have cancelled your payment, please try again.</h3>';
        echo '<form method="POST" id="SagePayForm" action="/payments">

                <p><input type="text" name="fname" placeholder="First Name" /></p>
                <p><input type="text" name="lname" placeholder="Last Name" /></p>
                <p><input type="email" name="email" placeholder="Email" /></p>
                <p><input type="text" name="ordernumber" placeholder="Order Number" /></p>
                <p><input type="text" name="amount" placeholder="Amount" /></p>
                <p><button name="submit">Continue</button></p>
            </form>';
    else:
        // Payment Failed
        echo '<h3>Unfortunately your payment was not successful. Please try another method</h3>';
        throw new \Exception($responseArray['StatusDetail']);
        echo '<form method="POST" id="SagePayForm" action="/payments">

                <p><input type="text" name="fname" placeholder="First Name" /></p>
                <p><input type="text" name="lname" placeholder="Last Name" /></p>
                <p><input type="email" name="email" placeholder="Email" /></p>
                <p><input type="text" name="ordernumber" placeholder="Order Number" /></p>
                <p><input type="text" name="amount" placeholder="Amount" /></p>
                <p><button name="submit">Continue</button></p>
            </form>';
    endif;
    exit;
endif;
