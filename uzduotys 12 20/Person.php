<?php
class Person
{
    public string $vardas;
    public string $pavarde;
    public string $asmensKodas;


    public function _construct()
    {
        $this->asmensKodas = random_int(1, 99);
    }
}