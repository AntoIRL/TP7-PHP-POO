<?php

class ChainePlus
{
    private $Chaine;

    public function gras($Chaine)
    {
        $Chaine = '<b>'.$Chaine.'</b>';
        return $Chaine;
    }
    public function souligne($Chaine)
    {
        $Chaine = '<u>'.$Chaine.'</u>';
        return $Chaine;
    }
    public function majuscule($Chaine)
    {
        return strtoupper($Chaine);
    }
    public function italic($Chaine)
    {
        $Chaine = '<em>'.$Chaine.'</em>';
        return $Chaine;
    }
}

$Affiche = new Chaineplus;
echo $Affiche->gras($_POST['text']).'</br>';
echo $Affiche->souligne($_POST['text']).'</br>';
echo $Affiche->majuscule($_POST['text']).'</br>';
echo $Affiche->italic($_POST['text']).'</br>';

?>