<?php

// classe et attributs

class Player {
    private string $nom;
    private string $prenom;
    private int $age;
    private string $pied;
    private int $endurance;
    private string $position;
    private int $att;
    private int $def;
    private int $vitesse;
    private int $id;

    //Constructeur

    public function __construct($id, $nom, $prenom, $age, $pied, $endurance, $position, $att, $def, $vitesse)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->pied = $pied;
        $this->endurance = $endurance;
        $this->position = $position;
        $this->att = $att;
        $this->def = $def;
        $this->vitesse = $vitesse;
    }

    //Getter

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getAge(){return $this->age;}
    public function getPied(){return $this->pied;}
    public function getEndurance(){return $this->endurance;}
    public function getPosition(){return $this->position;}
    public function getAtt(){return $this->att;}
    public function getDef(){return $this->def;}
    public function getVitesse(){return $this->vitesse;}

    //Setter

    public function setId($id){$this->id = $id;}
    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setAge($age){ $this->age = $age;}
    public function setPied($pied){$this->pied = $pied;}
    public function setEndurance($endurance){$this->endurance = $endurance;}
    public function setPosition($position){$this->position = $position;}
    public function setAtt($att){$this->att = $att;}
    public function setDef($def){$this->def = $def;}
    public function setVitesse($vitesse){$this->vitesse = $vitesse;}

    //Fonction pour afficher

    public function affichage(){
        echo "ID : " . $this->id . "<br>";
        echo "Nom : " . $this->nom . "<br>";
        echo "Prenom : " . $this->prenom . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Pied fort : " . $this->pied . "<br>";
        echo "Endurance : " . $this->endurance . "<br>";
        echo "Position : " . $this->position . "<br>";
        echo "Attaque : " . $this->att . "<br>";
        echo "Défense : " . $this->def . "<br>";
        echo "Vitesse : " . $this->vitesse . "<br>";
    }
}