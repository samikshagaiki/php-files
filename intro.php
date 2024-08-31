<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $food = htmlspecialchars($_POST['food']);

    // Set the timezone to IST
    date_default_timezone_set("Asia/Kolkata");

    // Get current hour in 12-hour format with AM/PM
    $hour = date('h'); // 12-hour format without leading zeros
    $am_pm = date('A'); // AM or PM

    // Specific greeting message based on the time in AM/PM format
    if (($am_pm == 'AM' && $hour >= 2) || ($am_pm == 'AM' && $hour < 11) || ($am_pm == 'PM' && $hour == 12)) {
        $greeting = " Morning";
    } elseif (($am_pm == 'AM' && $hour == 11) || ($am_pm == 'PM' && $hour < 4) || ($am_pm == 'PM' && $hour == 4)) {
        $greeting = " Afternoon";
    } elseif (($am_pm == 'PM' && $hour == 4 ) || ($am_pm == 'PM' && $hour < 9) || ($am_pm == 'PM' && $hour == 9)) {
        $greeting = " Evening";
    } else {
        $greeting = " Night";
    }

    // Display the message
    echo "<p>Good $greeting $name. Your favorite food is $food.</p>";
}

?>

