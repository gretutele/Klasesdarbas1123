class Car
{
    public string $spalva;
    public string $greitis;

    public function vaziuoti(): void
    {
        echo "Automobilis važiuoja ".$this->greitis." greičiu";
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }
}






//
//$filePath = 'duomenys.json';
//
//$failoTurinys = skaitytiFaila($filePath);
//
//$masyvas = json_decode($failoTurinys, true);
//$masyvas = array_merge($masyvas, ['Tautvydas' => 99, 'Joe' => 'LAbas']);
//$naujiDuomenys = json_encode($masyvas);
//
//saugotiIfaila($filePath, $naujiDuomenys);







//$filePath = 'duomenys.json';

//$failoTurinys = skaitytiFaila($filePath);
//include 'admin/Car.php';

//$masyvas = json_decode($failoTurinys, true);
//$masyvas = array_merge($masyvas, ['Tautvydas' => 99, 'Joe' => 'LAbas']);
//$naujiDuomenys = json_encode($masyvas);
//$automobilis = new Car();

//saugotiIfaila($filePath, $naujiDuomenys);
//$automobilis->spalva = 'Raudona';
//$automobilis->greitis = 555;

//echo $automobilis->gautiSpalva();
//echo '<br>';
//$automobilis->vaziuoti();