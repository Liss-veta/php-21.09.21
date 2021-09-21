<?php

class pilesos
{
    public $regular_power;
    public $shnur;
    public $knopka_on_off;
    public $knopka_sbor_shnura;

    public function On($knopka_on_off) {
        $knopka_on_off = true;
    }
    public function Sbor_Shnura($knopka_sbor_shnura, $shnur) {
        $knopka_sbor_shnura = true;
    }
    public function Regulirovka_power($regular_power) {
        $regular_power = true;
    }
    public function Off($knopka_on_off)
    {
        $knopka_on_off = false;
    }
}

