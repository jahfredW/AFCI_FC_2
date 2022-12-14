<?php

require 'render.php';

class Team extends Render {
    private string $nom;
    private array $listeAttaquants;
    private array $listeDefenseurs;
    private array $listeMilieux;
    private array $listeGoal;
    private array $listeRemplacant;
    public string $flag;


    public function __construct($nom, $listeAttaquants, $listeDefenseurs, $listeMilieux, $listeGoal, $listeRemplacant, $flag)
    {
        $this->nom = $nom;
        $this->listeAttaquants = $listeAttaquants;
        $this->listeDefenseurs = $listeDefenseurs;
        $this->listeMilieux = $listeMilieux;
        $this->listeGoal = $listeGoal;
        $this->listeRemplacant = $listeRemplacant;
        $this->flag = $flag;
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

    public function getListeRemplacant(){ return $this->listeRemplacant;}
    public function setListeRemplacant($player){ array_push($this->listeRemplacant, $player);}


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

    public function showListeAttaquantsCassos()
    {
        foreach ($this->getListeAttaquants() as $player){
            $player->afficher_joueur_cassos(count($this->getListeAttaquants())) ;
        }
    }

    public function showListeDefenseursCassos()
    {
        foreach ($this->getListeDefenseurs() as $player){
            $player->afficher_joueur_cassos(count($this->getListeDefenseurs()));
        }
    }

    public function showListeMilieuxCassos()
    {
        foreach ($this->getListeMilieux() as $player){

             $player->afficher_joueur_cassos(count($this->getListeMilieux()));
        }
    }

    public function showListeGoalCassos()
    {
        foreach ($this->getListeGoal() as $player){
             $player->afficher_joueur_cassos(count($this->getListeGoal()));
        }
    }

    public function getListeAll()
    {
        $listeJoueur = array_merge($this->getListeAttaquants(), $this->getListeMilieux(), $this->getListeDefenseurs(), $this->getListeGoal()
    , $this->getListeRemplacant());
        foreach ($listeJoueur as $Joueur){
            $Joueur->afficher_nom();
        }
    }


    

}








