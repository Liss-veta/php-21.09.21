<?php

class utug {
    public $shnur = false;
    public $knopka_on_off = false;
    public $raspilitel = false;
    public $knopka_raspilitel = false;

    public function on($shnur)
    {
        $shnur = true;
    }

    public function nagrevanie($knopka_on_off)
    {
        $knopka_on_off = true;
    }

    public function raspr($raspilitel, $knopka_raspilitel)
    {
        $raspilitel = true;
        $knopka_raspilitel = true;
    }

    public function off($shnur)
    {
        $shnur = false;
    }
}