<?php

// classe et attributs

class Player {
    private string $nom;
    private int $endurance;
    private int $att;
    private int $def;
    private int $vitesse;
    private int $id;

    //Constructeur


    public function __construct($id, $nom, $endurance, $att, $def, $vitesse)

    {
        $this->id = $id;
        $this->nom = $nom;
        $this->endurance = $endurance;
        $this->att = $att;
        $this->def = $def;
        $this->vitesse = $vitesse;
    }

    //Getter

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getEndurance(){return $this->endurance;}
    public function getAtt(){return $this->att;}
    public function getDef(){return $this->def;}
    public function getVitesse(){return $this->vitesse;}

    //Setter

    public function setId($id){$this->id = $id;}
    public function setNom($nom){$this->nom = $nom;}
    public function setEndurance($endurance){$this->endurance = $endurance;}
    public function setAtt($att){$this->att = $att;}
    public function setDef($def){$this->def = $def;}
    public function setVitesse($vitesse){$this->vitesse = $vitesse;}

    //Fonction pour afficher

    public function afficher_joueur($tailleListe){
        
        if($tailleListe == 3){
            $col = 4;
        } elseif ($tailleListe == 4){
            $col = 3;
        } elseif ($tailleListe == 1){
            $col = 12;
        }
        $presentation = "";
        // $presentation .= "Nom : " . $this->nom . "<br>";
        $presentation .= "Endurance : " . $this->endurance . "<br>";
        $presentation .= "Attaque : " . $this->att . "<br>";
        $presentation .= "Défense : " . $this->def . "<br>";
        $presentation .= "Vitesse : " . $this->vitesse . "<br>";
        
        echo '<div class=col-' . $col . '>';
        echo '<div class="card mx-auto" style="width : 12vw;">';
        echo '<img src="/img/jude.  png" class="card-img-top" alt="...">';
        echo '<div class="card-body">';
        echo "<div class='card-text'>" . $presentation  . "</div>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
