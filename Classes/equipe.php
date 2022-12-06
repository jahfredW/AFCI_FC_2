<?php

class Team {
    private string $nom;
    private array $listeAttaquants;
    private array $listeDefenseurs;
    private array $listeMilieux;
    private array $listeGoal;

    public function __construct($nom, $listeAttaquants, $listeDefenseurs, $listeMilieux, $listeGoal)
    {
        $this->nom = $nom;
        $this->listeAttaquants = $listeAttaquants;
        $this->listeDefenseurs = $listeDefenseurs;
        $this->listeMilieux = $listeMilieux;
        $this->listeGoal = $listeGoal;
    }

    public function getName(){
        return $this->nom;
    }
    public function getListeAttaquants(){
        return $this->listeAttaquants;
    }

    public function setName($value){
        $this->nom = $value;
    }
    public function setListeAttaquants($attaquants){
        array_push($this->listeAttaquants, $attaquants);
    }

    public function getListeDefenseurs(){ return $this->listeDefenseurs;}
    public function setListeDefenseurs($player){ array_push($this->listeDefenseurs,$player);}
    
    public function getListeMilieux(){ return $this->listeMilieux;}
    public function setListeMilieux($player){ array_push($this->listeMilieux, $player);}

    public function getListeGoal(){ return $this->listeGoal;}
    public function setListeGoal($player){ array_push($this->listeGoal, $player);}


    public function showListeAttaquants()
    {
        foreach ($this->getListeAttaquants() as $player){
            $player->afficher_joueur(count($this->getListeAttaquants())) ;
        }
    }

    public function showListeDefenseurs()
    {
        foreach ($this->getListeDefenseurs() as $player){
            $player->afficher_joueur(count($this->getListeDefenseurs()));
        }
    }

    public function showListeMilieux()
    {
        foreach ($this->getListeMilieux() as $player){

             $player->afficher_joueur(count($this->getListeMilieux()));
        }
    }

    public function showListeGoal()
    {
        foreach ($this->getListeGoal() as $player){
             $player->afficher_joueur(count($this->getListeGoal()));
        }
    }

    public function getListeAll()
    {
        $listeJoueur = array_merge($this->getListeAttaquants(), $this->getListeMilieux(), $this->getListeDefenseurs(), $this->getListeGoal());
        foreach ($listeJoueur as $Joueur){
            $Joueur->afficher_nom();
        }
    }
}






