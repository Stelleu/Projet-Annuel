<?php
$payment = new StripePayment(STRIPE_SECRET);
$payment->startPayment($cart);