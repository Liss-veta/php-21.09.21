<?php

class chainik {
    public $emkost = false;
    public $knopka_on_off = false;
    public $shnur = false;


    public function zapolnenie($emkost)
    {
        $emkost = true;
    }

    public function On_electr($shnur)
    {
        $shnur = true;
    }

    public function nagrevanie($knopka_on_off)
    {
        $knopka_on_off = true;
    }

    public function Off_electr($shnur)
    {
        $shnur = false;
    }
}
