<?php
include 'konvert.php';

function konvertavimai(float $kas, string $kaip): float {
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
            $ats = KG2POUND($kas);
            break;
        case 'celsijus':
            $ats = Cels_Faren($kas);
            break;
        case 'farenheitai':
            $ats = Cels_Faren($kas);
            break;
        default;
            throw new Exeption('Nesuprantamas formatas');
    }
return $ats;
}
