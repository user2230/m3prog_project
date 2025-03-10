<?php
function convertCurrency($amount, $fromCurrency, $toCurrency) {
    echo "Amount: $amount, From: $fromCurrency, To: $toCurrency";
}

function sendEmail($to, $from, $subject, $message) {
    echo "To: $to, From: $from, Subject: $subject, Message: $message";
}

function generateRandomString($length) {
    echo "Length: $length";
}

function calculateArea($length, $width) {
    echo "Length: $length, Width: $width";
}

convertCurrency(100, "USD", "EUR");
echo "<br>";

sendEmail("test@ma-clout.com", "me@ma-clout.com", "Hello", "This is a test email.");
echo "<br>";

generateRandomString(10);
echo "<br>";

calculateArea(5, 10);
echo "<br>";
?>
