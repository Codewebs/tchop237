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

// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('694535789');
Monetbil::setCountry('CM');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref('d4be3535f9cb5a7aff1f84fa94e6f0853');
Monetbil::setUser(12);
Monetbil::setFirst_name('Envy');
Monetbil::setLast_name('Lord');
Monetbil::setEmail('landryhion@gmail.com.com');
Monetbil::setLogo('./assets/img/indiza_logo.png');
Monetbil::setReturn_url('https://tchop237.herokuapp.com/');
Monetbil::setNotify_url('https://tchop.herokuapp.com/findProducts');

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