<?php
include 'konvert.php';

/**
 * @param float $kas
 * @param string $kaip
 * @return float
 * @throws Exception
 * @noinspection
 */
function konvertuoti(float $kas, string $kaip): float {
    switch ($kaip) {
        case 'mylios':
            $ats = KM2MILES($kas);
            break;
        case 'kilometrai':
            $ats = MILES2KM($kas);
            break;

        case 'poundai':
            $ats = KG2POUND($kas);
            break;
        case 'kilogramai':
            $ats = POUND2KG($kas);
            break;

        case 'farenheitai':
            $ats = Faren_Cels($kas);
            break;
        case 'celsijus':
            $ats = Cels_Faren($kas);
            break;
        default;
         echo ('Nesuprantamas formatas');
    }
    return ($ats);
}