<?php


// build the array with sorted identities
class Drawer
{
    public function __construct(private array $array)
    {
        $this->stagiaires = $array;
    }

    public function buildTab(){
        for( $index = 1; $index < count($this->stagiaires) + 1; $index ++) {
            echo '
                <div class="row py-2">
                    <div class="col-4 text-center border-bottom">';
            echo $index;
            echo '       </div>
                    <div class="col-4 text-center border-bottom">';
            echo $this->stagiaires[$index - 1][0];
            echo '       </div>
                    <div class="col-4 text-center border-bottom">';
            echo $this->stagiaires[$index - 1][1];
            echo       '</div></div>';
        }
    }


}

// stagiaire class
class Stagiaire
{
    public function __construct(private string $name, private string $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getSurName(){
        return $this->surname;
    }

    public function setSurName($value){
        $this->surname= $value;
    }

    public function __toString()
    {
        return "Je suis " . $this->name . " " . $this->surname;
    }

}

// Enterprise Entity class
class Entreprise
{
    public function __construct(private string $name,private array $employeListe)
    {
        $this->name = $name;
        $this->employeListe = $employeListe;

    }


    public function getName(){
        return $this->name;
    }

    public function getEmployeListe(){
        return $this->employeListe[0]->getSurName();
    }

    public function sortEmployeListe(){
        $tab = array();
        for($index = 0; $index < count($this->employeListe); $index ++){
            array_push($tab, [$this->employeListe[$index]->getSurname(),$this->employeListe[$index]->getName()]);
        }
        sort($tab);
        return $tab;
    }

    public function addEmploye(& $object){
        array_push($this->employeListe, $object);
    }
}

