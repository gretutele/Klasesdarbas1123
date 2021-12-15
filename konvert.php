<?php

const KM2MILES = 0.621371;
const KG2POUND = 0.453592;
const Cels_Faren = 1.8 . 32;

function KM2MILES(float $kas): float{
         return $kas * KM2MILES;
}
function MILES2KM(float $kas): float {
    return $kas / KM2MILES;
}
function KG2POUND(float $kas): float{
        return $kas * KG2POUND;
}
function POUND2KG(float $kas): float{
    return $kas / KG2POUND;
}
function Cels_Faren(float $kas): float{
    return $kas * Cels_Faren;
}
 function Faren_Cels(float $kas): float{
    return $kas / Cels_Faren;
}