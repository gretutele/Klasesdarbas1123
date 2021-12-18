<?php

class Bakas
{
    private int $bakoTalpa = 0;
    public int $atstumas;
    public int $greitis;

    public function nuvaziavo(): float
    {
        $darbinisTuris = 1.6;
        $litrazas = 6.6 * sqrt($darbinisTuris);
        $kelione = ($litrazas * $this->atstumas) / 100;
        return $kelione;
    }

    public function sanaudos(): float
    {
        $darbinisTuris = 1.6;
        $litrazas = 6.6 * sqrt($darbinisTuris);
        $sanaudos = $this->greitis / $litrazas / 100 * $this->atstumas;
        return $sanaudos;
    }

    public function kuras(): int
    {
        return $this->bakoTalpa;
    }

    public function piltiKura($kiek): void
    {
        $this->bakoTalpa += $kiek;
    }
}