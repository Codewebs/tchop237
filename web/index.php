<?php
/*
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License or any later version.
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once './monetbil.php';


$phone = $_GET['customer_phone'];
$email = "landryhion@gmail.com";
$amount = $_GET['amount'];  
$user_id = $_GET['customer_id'];
$firstname = $_GET['customer_firstname'];
$lastname = $_GET['customer_lastname'];
$payement_ref = $_GET['payement_ref'];
$item_ref = $_GET['item_ref'];
// Setup Monetbil arguments
echo $payement_ref;
Monetbil::setAmount($amount);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone($phone);
Monetbil::setCountry('CM');
Monetbil::setItem_ref($item_ref);
Monetbil::setPayment_ref($payement_ref);
Monetbil::setUser(12);
Monetbil::setFirst_name($firstname);
Monetbil::setLast_name($lastname);
Monetbil::setEmail($email);
Monetbil::setLogo('./assets/img/indiza_logo.png');
Monetbil::setReturn_url('https://tchop237.herokuapp.com/');
Monetbil::setNotify_url('https://tchop.herokuapp.com/addorder');

$payment_url = Monetbil::url();
?> 

<?php
error_reporting(E_ALL);
header("Location: ".$payment_url);
die();
?>
<!--
<?php// if (Monetbil::MONETBIL_WIDGET_VERSION_V2 == Monetbil::getWidgetVersion()): ?>
    <form action="<?php echo $payment_url; ?>" method="post" data-monetbil="form">
        <button type="submit" class="btnmnb" id="monetbil-payment-widget">Pay By Mobile Money</button>
    </form>


<!-- To open widget, add JS files -->
<?php echo Monetbil::js(); ?>

<!-- To auto open widget, add JS files -->
<?php
echo Monetbil::js(true); ?>