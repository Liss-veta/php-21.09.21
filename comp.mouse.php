<?php

class comp_mouse
{
    public $left_knopka = false;
    public $right_knopka = false;
    public $rolik = false;
    public $shnur = false;

    public function on($shnur)
    {
        $shnur = true;
    }

    public function onclick_left($left_knopka)
    {
        $left_knopka = true;
    }

    public function onclick_right($right_knopka)
    {
        $right_knopka = true;
    }

    public function kruchenie($rolik)
    {
        $rolik = true;
    }

    public function off($shnur)
    {
        $shnur = false;
    }
}
