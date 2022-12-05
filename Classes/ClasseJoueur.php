<?php

// classe et attributs

class Player {
    private string $nom;
    private string $prenom;
    private int $age;
    private int $endurance;
    private string $position;
    private int $att;
    private int $def;
    private int $vitesse;
    private int $id;

    //Constructeur

    public function __construct($id, $nom, $prenom, $age, $endurance, $position, $att, $def, $vitesse)
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
    public function getPied(){return $this->pied;}
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
        $presentation = "";
        $presentation .= "ID";
        $presentation .= "Nom : " . $this->nom . "<br>";
        $presentation .= "Prenom : " . $this->prenom . "<br>";
        $presentation .= "Age : " . $this->age . "<br>";
        $presentation .= "Endurance : " . $this->endurance . "<br>";
        $presentation .= "Position : " . $this->position . "<br>";
        $presentation .= "Attaque : " . $this->att . "<br>";
        $presentation .= "Défense : " . $this->def . "<br>";
        $presentation .= "Vitesse : " . $this->vitesse . "<br>";

        return $presentation;
    }

    public function __toString()
    {
        return $this->affichage();
    }
}

$joueur1 = new Player(1, 'Ronaldo', 'Christiano', 30, 50,'attaquant',12,20,50);
echo $joueur1;