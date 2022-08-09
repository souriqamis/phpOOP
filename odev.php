<?php

class Sekil
{
    public $kenar1;
    public $kenar2;
    public $kenar3;
}

class Dikdortgen extends Sekil
{
    function cevre($kenar1, $kenar2)
    {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        return 2 * ($this->kenar1 + $this->kenar2);
    }

    function alan($kenar1, $kenar2)
    {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        return $kenar1 * $kenar2;
    }
}

class Kare extends Dikdortgen
{

}

class Ucgen extends Sekil
{
    function cevre($kenar1, $kenar2, $kenar3)
    {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
        $ucgenCevre = $kenar1 + $kenar2 + $kenar3;
        return $ucgenCevre;
    }

    function alanUcgen($kenar1, $kenar2, $kenar3)
    {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
        $u = ($kenar1 + $kenar2 + $kenar3) / 2;
        return bcsqrt($u * ($u - $kenar1) * ($u - $kenar2) * ($u - $kenar3));
    }
}

$Ucgen = new Ucgen();
echo $Ucgen->alanUcgen(6, 8, 10) . "<br>";
$Kare = new Kare();
echo $Kare->alan(5, 10);