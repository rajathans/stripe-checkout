<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_pAqMRKBGdG101pBzXE0l6Mda",
  "publishable_key" => "pk_test_QefDDvA5A2vO6KpepQfjFN4h"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
