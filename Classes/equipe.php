<?php

class Team {
    private string $nom;
    private array $listeAttaquants;
    private array $listeDefenseurs;
    private array $listeMilieus;
    private array $ilisteGoal;

    public function __construct($nom, $listePlayer, $isAttaquant, $isMilieu, $isDefenseur, $isGoal)
    {
        $this->nom = $nom;
        $this->listePlayer = $listePlayer;
        $this->$isAttaquant = $isAttaquant;
        $this->$isDefenseur = $isDefenseur;
        $this->$isMilieu = $isMilieu;
        $this->$isGoal = $isGoal;
    }

    public function getName(){
        return $this->nom;
    }
    public function getListePlayer(){
        return $this->listePlayer;
    }

    public function setName($value){
        $this->nom = $value;
    }
    public function setListePlayer($liste){
        $this->listePlayer = $liste;
    }

    public function addPlayer(& $Player){
        array_push($this->listePlayer, $Player);
    }

    public function showListe()
    {
        foreach ($this->getListePlayer() as $player){
            echo $player . "\n";
        }
    }

    public

}



