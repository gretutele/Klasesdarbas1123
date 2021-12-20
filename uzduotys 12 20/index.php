<?php

include 'Student.php';
include 'Person.php';
include 'Grupe.php';

$studentas1 = new Student();
$studentas2 = new Student();
$studentas3 = new Student();
$studentas4 = new Student();
$studentas5 = new Student();

$asmuo = new Person();
$grupe = new Grupe();

echo $grupe->gautiPavadinima();
echo

$studentai = [
    $studentas1,
    $studentas2,
    $studentas3,
    $studentas4,
    $studentas5,
];

foreach ($studentai as $studentas) {
    echo $studentas->asmensKodas . "\n";
}