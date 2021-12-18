<?php
class Car
{
    public string $modelis;
    public string $spalva;
    public int $greitis;
    public int $durys;
    private float $rida;

    public function __construct() {
        $this->rida = 0;
    }

    public function drive(float $time): void {
        echo "Auto važiuoja " . $this->greitis . " km/h greičiu " . $time . ' valandas';
        $road = $this->greitis * $time;
        $this->addMileage($road);
    }

    public function model(): string {
        return $this->modelis;
    }

    public function color(): string {
        return $this->spalva;
    }

    public function doors(): int {
        return $this->durys;
    }

    public function mileage(): float {
        return $this->rida;
    }

    private function addMileage($x) {
        $this->rida += $x;
    }

}
