<?php

class mikrovolnovka {
    public $shnur = false;
    public $dverca = false;
    public $knopka_on = false;
    public $taimer = 0;

    public function On_electr($shnur)
    {
        $shnur = true;
    }

    public function otkr($dverca)
    {
        $dverca = true;
    }

    public function zakr($dverca)
    {
        $dverca = false;
    }

    public function razogrev($knopka_on, $taimer)
    {
        $knopka_on = true;
        $taimer += 30;
    }

    public function Off_electr($shnur)
    {
        $shnur = false;
    }
}
