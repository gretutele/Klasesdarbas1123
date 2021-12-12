<?php

$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
];

foreach ($ceu as $key => $value) {
    echo $key . '=' . $value . '<br/>';
}

//skirianti eilute
    echo "<br/>";

ksort($ceu);
foreach($ceu as $x => $x_value) {
    echo $x . '= ' . $x_value;
    echo "<br>";
}

//skirianti eilute
    echo "<br/>";

//php namu darbai toliau
//kas penktas

for ($x = 0; $x <= 25; $x+=5) {
    echo "The number is: $x <br>";
}

//skirianti eilute
    echo "<br/>";

// pakeisti raide
$char="A";
foreach ($ceu as $key => $value) {
    echo str_replace("a", "A", "$key");
    echo "<br/>";
}
//temperatura

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73,
    75, 79, 73];

echo "<br/>";

$avg = array_sum($temp)/count($temp);
echo 'Vidutine temp : ' . $avg;

echo "<br/>";

//5kios zemiausios temp

sort($temp);
echo "Penkios zemiausios temp: ";
for($x=0; $x<5; $x++) {
    echo $temp[$x] . ", ";
}
echo "<br/>";

//5kios auksciausios temp

sort($temp);
echo "Penkios auksciausios temp: ";
for ($x= count($temp) - 5; $x < count($temp);$x++) {
    echo $temp[$x] . ", ";
}
    echo "<br/>";

//masyvo elementai

//echo strlen("Hello world!");

$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];

echo "Trumpiausias masyvo elementas: ";
echo (min($arr));
    echo "<br/>";

echo "Ilgiausi masyvo elementai: ";
echo (max($arr));
    echo "<br/>";

//pirmas nerodo ka reik, antras skaiciais zemiau:

$temp= array_map('strlen', $arr);
echo min($temp) . "<br>" . max($temp);
    echo "<br/>";

//masyvu jungimas

$vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];
$pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė",  "Jonė", "Kristė"];
$C = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];
echo "<br>";

$D = array_combine($vardai, $pavardes);
print_r($D) ;
    echo "<br>";

//$E = array_merge_recursive($vardai=0, $pavardes, $x+=2);
//print_r($E);

//funkcijos

function KmMile($kint, $koks) {
    if($koks === 'kilometrai') {
        return $kint * 0.621371;
    }
    if($koks === 'mylios') {
        return $kint * 1.60934;
    }
}
function KgPound($kint, $koks) {
    if($koks === 'kilogramai') {
        return $kint * 2.20462;
    }
    if($koks === 'poundai') {
        return $kint * 0.453592;
    }
}
function CelsFaren($kint, $koks) {
    if($koks === 'celcijus') {
        return $kint * 9/5 + 32;
    }
    if($koks === 'farenheitai') {
        return ($kint - 32)* 5/9;
    }
}

echo KmMile(20, 'kilometrai');
echo '<br>';
echo KgPound(10, 'kilogramai');
echo '<br>';
echo CelsFaren(10, 'celcijus');
echo '<br>';
