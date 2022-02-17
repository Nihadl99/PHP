<?php

class Chat {
    public $nom;
    public $type;
    public $couleur;
    private $pattes = 4;

    public function __construct($n = null,$t = null,$c = null)
    {
        $this->nom = $n;
        $this->type = $t;
        $this->couleur = $c;
    } // c'est la méthode 

    public function miaule()
    {
        return 'Miaou !';
    }

    public function joueAvec($chat)
    {
        return $this->nom.' joue avec '.$chat->nom;
    }

    public function seBatAvec($chat)
    {   
        if (rand(0,1)){
        $this->pattes--;
        return $chat->nom.' a gagné';

    }else{
        $chat->pattes--;
        return $this->nom.'a gagné;
    }
    }

    public function seBatAvec ($chat)
    {

    }

    public function getPattes() 
    {
        return $this->pattes;
    }

}


 
?>
