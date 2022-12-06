<?php 

class Render {
    public function render()
    {
    echo '<div class="w-100">';
    echo '<div class="row">';
    echo '<div class="col-2 card">';
    echo '<div class="h2 text-center mt-2">Liste des Joueurs</div>';
    echo '<div class="row mt-3 fs-4">';
    $this->getListeAll();
    echo '</div>';
    echo '</div>';
    echo '<div class="col-10">';
    echo '<div class="text-center mx-auto mt-4">';
    echo '<img src="../../image/'. $this->flag . '.png">';
    echo '<div class="h2 text-center mb-5">Equipe : ' .$this->getName() . '</div>';
    echo '</div>';
    echo '<div class="row mt-2 text-center d-flex justify-center">';
    $this->showListeAttaquants();
    echo '</div>';
    echo '<div class="row mt-5 text-center">';
    $this->showListeMilieux();
    echo '</div>';
    echo '<div class="row mt-5 text-center">';
    $this->showListeDefenseurs();
    echo '<div class="row mt-5 text-center">';
    $this->showListeGoal();
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    }

    public function renderCassos()
    {
    echo '<div class="w-100">';
    echo '<div class="row">';
    echo '<div class="col-2 card">';
    echo '<div class="h2 text-center mt-2">Liste des Joueurs</div>';
    echo '<div class="row mt-3 fs-4">';
    $this->getListeAll();
    echo '</div>';
    echo '</div>';
    echo '<div class="col-10">';
    echo '<div class="text-center mx-auto mt-4">';
    echo '<img src="../../image/'. $this->flag . '.png">';
    echo '<div class="h2 text-center mb-5">Equipe : ' .$this->getName() . '</div>';
    echo '</div>';
    echo '<div class="row mt-2 text-center d-flex justify-center">';
    $this->showListeAttaquantsCassos();
    echo '</div>';
    echo '<div class="row mt-5 text-center">';
    $this->showListeMilieuxCassos();
    echo '</div>';
    echo '<div class="row mt-5 text-center">';
    $this->showListeDefenseursCassos();
    echo '<div class="row mt-5 text-center">';
    $this->showListeGoalCassos();
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    }
}