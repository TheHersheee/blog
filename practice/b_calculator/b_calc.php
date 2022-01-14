<?php

$currentYear = 2022;
$currentMonth = 1;
$months = $currentYear * 12;
$birthdays = file_get_contents("birthdays.csv");
$birthday = explode("\n", $birthdays);

for ($i = 1; $i < count($birthday); $i++) {
    $row = $birthday[$i];
    $data = explode(",", $row);
    $name = $data[0];
    $year = (int) $data[1];
    $month = (int) $data[2];
    $burthdaymonths = $year * 12;
    $age_float = ($months - $burthdaymonths - $month) / 12;
    $age = floor($age_float);
    $agemonth = ($age_float - $age) * 12;
    echo "$name $age лет $agemonth месяцев \n";
}
