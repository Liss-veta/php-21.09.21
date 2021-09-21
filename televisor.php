<?php

class televizor
{
    public $shnur = false;
    public $ekran = false;
    public $knopka_plus = false;
    public $ur_gromkosti = 0;
    public $knopka_minus = false;
    public $knopka_on = false;
    public $knopka_off = false;
    public $knopka_next = false;
    public $knopka_pred = false;
    public $kanal = 1;

    public function On_electr($shnur)
    {
        $shnur = true;
    }

    public function On($knopka_on)
    {
        $knopka_on = true;
        $knopka_off = false;
    }

    public function demonsration($ekran)
    {
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

    public function kanal_next($knopka_next, $kanal)
    {
        $knopka_next = true;
        if($kanal < 20)
        {$kanal++;}
    }

    public function kanal_pred($knopka_pred, $kanal)
    {
        $knopka_pred = true;
        if($kanal > 1)
        {$kanal--;}
    }


    public function Off($knopka_off, $knopka_on)
    {
        $knopka_on = false;
        $knopka_off = true;
    }
    public function Off_electr($shnur)
    {
        $shnur = false;
    }
}
