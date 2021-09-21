<?php

class phone{
    public $ekran = false;
    public $knopka_on_off = false;
    public $knopka_plus = false;
    public $knopka_minus = false;
    public $prinyat = false;
    public $otklonit = false;
    public $ur_gromkosti = 0;

    public function On($ekran, $knopka_on_off)
    {
        $knopka_on_off = true;
        $ekran = true;
    }

    public function plus_zvuk($knopka_plus, $ur_gromkosti)
    {
        $knopka_plus = true;
        $ur_gromkosti++;
    }

    public function minus_zvuk($knopka_minus, $ur_gromkosti)
    {
        $knopka_minus = true;
        $ur_gromkosti--;
    }

    public function prinyat_zvonok($prinyat)
    {
        $prinyat = true;
    }

    public function otklonit_zvonok($otklonit)
    {
        $otklonit = true;
    }

    public function Off($knopka_on_off)
    {
        $knopka_on_off = true;
    }

}
