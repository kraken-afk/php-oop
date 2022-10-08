<?php

$dateTime = new DateTime('now', );
$dateTime->setDate(2004, 11, 11); #Set current Date
$dateTime->setTime(10, 10, 10, 0); #Set current Time

// DateTimeZone
# Set New Time Zone
$now = new DateTime('now', new DateTimeZone("Asia/Jakarta"));
// or use setTimeZone

$now->setTimezone(new DateTimeZone("Asia/Jakarta"));

var_dump($now);


// DateInterval

/**
 * Adding Year - Y
 * Adding Month - M
 * Adding Week - W
 * Adding Day - D
 */

//  Add date
// Always start with P - Amount - Type
$dateTime->add(new DateInterval("P1Y"));

var_dump($dateTime);

// subtract date
$subtractOneYear = new DateInterval("P1Y");
$subtractOneYear->invert = true;

$dateTime->add($subtractOneYear);
var_dump($dateTime);

// Formating Date
$str = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $str" . PHP_EOL . PHP_EOL;

// Parse DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2004-11-11 10:10:00", new DateTimeZone("Asia/Jakarta"));
var_dump($date);