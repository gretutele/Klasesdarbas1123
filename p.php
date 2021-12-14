<html>
<head>
    <body>

</body>
</head>

</html>


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

for ($i = 0, $iMax = count($ceu); $i <$iMax; $i+=5) {
    $key = array_keys($ceu)[$i];
    $value = $ceu[$key];
    echo $key . ' = ' . $value . "<br>";

}

//skirianti eilute
    echo "<br/>";

// pakeisti raide
$char="A";
foreach ($ceu as $key => $value) {
    echo str_replace("a", "A", "$key");
    echo "<br/>";
}

// destytojo variantas reikia perziuret, cia blogas

foreach ($ceu as $key => $value) {
    if (strpos($key, 'A') > 0 || strpos($value, 'A') > 0) {
        echo $key . ' = ' . $value . "<br>";
    } else {
        echo strpos($key, 'A') . "<br>";
    }
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

$arr = ["abc", "de", "abcd", "hjjj", "g", "wer"];

echo "Trumpiausias masyvo elementas: ";
echo strlen(min($arr));
    echo "<br/>";

echo "Ilgiausi masyvo elementai: ";
echo strlen(max($arr));
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

/*function KmMile($kint, $kas) {
    if($kas === 'kilometrai') {
        return $kint * 0.621371;
    }
    if($kas === 'mylios') {
        return $kint * 1.60934;
    }
}
function KgPound($kint, $kas) {
    if($kas === 'kilogramai') {
        return $kint * 2.20462;
    }
    if($kas === 'poundai') {
        return $kint * 0.453592;
    }
}
function CelsFaren($kint, $kas) {
    if($kas === 'celcijus') {
        return $kint * 9/5 + 32;
    }
    if($kas === 'farenheitai') {
        return ($kint - 32)* 5/9;
    }
}

//echo KmMile(15, 'kilometrai');
//echo '<br>';
//echo KgPound(10, 'kilogramai');
//echo '<br>';
//echo CelsFaren(10, 'celcijus');
//echo '<br>';
*/


//function konvertuoti(int|(float $ka, string $kaip): float) {
   // switch ($kaip) {
   //     case 'mylios':
   //         $ats = km2myles($ka);
   //         break;
   //     case 'kilometrai':
   //         $ats = myles2km($ka):
   //         break;
   //         default;
   //         throw new Exeption('Nesuprantu nieko');
   // }

//return $ats;
//}
include 'konvertavimai.php';
echo '<br>';
echo KM2MILES(100, 'kilometrai');
echo '<br>';

echo KG2POUND(10, 'kilogramai');
echo '<br>';

echo Cels_Faren(10, 'celsijus');
echo '<br>';
