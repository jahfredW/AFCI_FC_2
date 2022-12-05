<?php

// classe et attributs

class Player {
    private string $nom;
    private string $prenom;
    private int $age;
    private int $endurance;
    private int $att;
    private int $def;
    private int $vitesse;
    private int $id;

    //Constructeur

    public function __construct($id, $nom, $prenom, $age, $endurance, $att, $def, $vitesse)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->endurance = $endurance;
        $this->att = $att;
        $this->def = $def;
        $this->vitesse = $vitesse;
    }

    //Getter

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getAge(){return $this->age;}
    public function getEndurance(){return $this->endurance;}
    public function getAtt(){return $this->att;}
    public function getDef(){return $this->def;}
    public function getVitesse(){return $this->vitesse;}

    //Setter

    public function setId($id){$this->id = $id;}
    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setAge($age){ $this->age = $age;}
    public function setEndurance($endurance){$this->endurance = $endurance;}
    public function setAtt($att){$this->att = $att;}
    public function setDef($def){$this->def = $def;}
    public function setVitesse($vitesse){$this->vitesse = $vitesse;}

    //Fonction pour afficher

    public function affichage(){
        echo "ID : " . $this->id . "<br>";
        echo "Nom : " . $this->nom . "<br>";
        echo "Prenom : " . $this->prenom . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Endurance : " . $this->endurance . "<br>";
        echo "Attaque : " . $this->att . "<br>";
        echo "Défense : " . $this->def . "<br>";
        echo "Vitesse : " . $this->vitesse . "<br>";
    }
}