<?php

function setting(){
    return \App\Model\Setting::first();
}

function getDatesFromRange($start, $end, $format = 'Y-m-d') {

    // Declare an empty array
    $array = array();

    // Variable that store the date interval
    // of period 1 day
    $interval = new DateInterval('P1D');

    $realEnd = new \DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new \DateTime($start), $interval, $realEnd);

    // Use loop to store date into array
    foreach($period as $date) {
        $array[] = $date->format($format);
    }

    // Return the array elements
    return $array;
}

function site_color(){
    return 'red';
}
?>
