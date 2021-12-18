<?php

// Šią kodo dalį talpiname kiekviename puslapyje kurį norime apsaugoti

// Visuomet pirma startuojam sesija
session_start();

if (isset($_SESSION['arPrisijunges'])) {
    echo "Matote slaptus duomenis : :)";
    echo '<a href="/logout.php">Atsijungti</a>';
} else {
    // Nukreipia lankytoją į prisijungimo skriptą
    header("Location: http://localhost:/loginForm.php");
}
echo '<br>';
//kitas

include 'car.php';

$tesla = new Car();

$tesla->modelis = 'Model S';
$tesla->spalva = 'Black';
$tesla->greitis = 249;
$tesla->durys = 4;

echo $tesla->model();
echo '<br>';
echo $tesla->color();
echo '<br>';
echo $tesla->doors();
echo '<br>';
$tesla->drive(2);
echo '<br>';
$tesla->drive(5);
echo '<br>';
echo 'Rida: ' . $tesla->mileage();

// OOP praktines
echo '<br>';
echo '<br>';

include "Bakas.php";

$masina = new Bakas();

$masina->atstumas = 86;
$masina->greitis = 45;

$masina->piltiKura(50);

echo 'Turim kuro: ' . $masina->kuras() . ' L';
echo '<br>';
echo 'Nuvažiavom ' . $masina->atstumas .  ' KM ' . $masina->greitis . ' KM/H greičiu ir liko: ' .
    round($masina->kuras() - $masina->nuvaziavo(), 2) . ' L kuro.' .
    ' Sunaudojom ' . round($masina->sanaudos(), 2) . ' L kuro.';
;