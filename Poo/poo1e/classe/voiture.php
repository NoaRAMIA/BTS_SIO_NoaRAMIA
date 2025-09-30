<?php

class Voiture {
    private $marque;
    private $nom;
    private $modele;
    private $compteur;
    private $aDemarre;

    function get_marque (){
        return $this->marque;
    }
    function set_marque ($marque){
        if ($marque == "dacia") {
            $this->marque = $marque;
        } else {
            echo 'erreur : la marque doit être dacia';
        }
    }
    
    function get_nom () {
        return $this->nom;
    }
    function set_nom ($nom){
        if ($nom == "marion") {
        $this->nom = $nom;
    } else {
        echo 'erreur : le nom doit être marion';
    }
}

    function get_modele(){
        return $this->modele;
    }
    function set_modele ($modele){
        if ($modele = "M4") {
        $this->modele = $modele;
    } else {
        echo 'erreur : le modele doit être M4';
    }
}

    function get_compteur(){
        return $this->compteur;
    }
    function set_compteur ($compteur){
        if ($compteur >= 0 && $compteur <= 50000) {
        $this->compteur = $compteur;
    } else {
        echo 'erreur : le compteur doit être entre 0 et 50000';
    }
}

    function get_aDemarre(){
        return $this->aDemarre;
    }
    function set_aDemarre ($aDemarre){
        if ($aDemarre == true || $aDemarre == false) {
        $this->aDemarre = $aDemarre;
    } else {
        echo 'erreur : a demarrer doit être vrai ou faux';
    }
}

    // 🔹 Constructeur
    function __construct($nom) {
        $this->nom = $nom;       // on donne la valeur passée en paramètre
        $this->marque = "BMW";  // valeur par défaut
        $this->modele = "M4";  // valeur par défaut
        $this->compteur = 0;         // compteur démarre à 0
        $this->aDemarre = false;     // moteur éteint par défaut
    }

    function ADemarre() {
        $this->aDemarre = true;
    }

    function avancer ($km) {
        $this->compteur = $this->compteur + $km;
    }

    function arreter() {
        $this->aDemarre = false;
    }

    function afficher() {
        echo "<p><b>-- Voiture " . $this->marque . " " . $this->modele . " --</b></p>";
        echo "<ul>";
        echo "<li> Nom : " . $this->nom . "</li>";
        echo "<li> Modele : " . $this->modele . "</li>";
        echo "<li> Marque : " . $this->marque . "</li>";
        echo "<li> Compteur : " . $this->compteur . "</li>";
        if ($this->aDemarre) {
            echo "<li>La voiture est allumée</li>";
        } else {
            echo "<li>Le moteur est éteint</li>";
        }
        echo "</ul>";
    }

    function __destruct()
    {
        echo "<p> adieu monde injuste
         " . $this->nom . "</p>";
    }
}