<?php

class indukcionnaia_plita {
    public $shnur = false;
    public $knopka_on_off = false;
    public $power = 0;
    public $knopka_plus = false;
    public $knopka_minus = false;

    public function On_electr($shnur)
    {
        $shnur = true;
    }
    public function nagrevanie_on($knopka_on_off)
    {
        $knopka_on_off = true;
    }
    public function plus($power, $knopka_plus)
    {
        $knopka_plus = true;
        $power++;
    }
    public function minus($power, $knopka_minus)
    {
        $knopka_minus = true;
        $power--;
    }
    public function nagrevanie_off($knopka_on_off)
    {
        $knopka_on_off = false;
    }
    public function Off_electr($shnur)
    {
        $shnur = false;
    }
}
