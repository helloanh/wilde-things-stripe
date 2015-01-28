<?php
  require_once('../stripe/lib/Stripe.php');
  $stripe = array(
    'secret_key'      => 'k_test_SilHoKVlrT5IkzgbDkdmhlrC',
    'publishable_key' => 'pk_test_49nBKiKuDbwzyAk1hA0bcKPg'
    );
  Stripe::setApiKey($stripe['secret_key']);
?>

<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js"
          class="stripe-button" 
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount="5000" data-description="Once year's subscription">
  </script> 

</form>
