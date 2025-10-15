<?php   
    class boisson {
        private $nom = ""; 
        private $contenance = ""; 
        private $categorie = ""; 
        private $est_alcoolisee = "false"; 


function commande($message) {
echo '<p class="commande">Commande : '.$message.'</p>'.PHP_EOL;
}
function reponse($message) {
echo '<p class="reponse">Reponse : '.$message.'</p>'.PHP_EOL;
}
function erreur($message) {
echo '<p class="erreur">Erreur : '.$message.'</p>'.PHP_EOL;
}

 public function __construct($nom) {
    $this->nom = $nom; 
    $this->contenance = 0 ; 
}

public function __destruct()
{
echo"<p> c'est fini les boissons </p>"; 
}
function set_categorie($categorie){
   if ($categorie == "vin" || $categorie == "eau" || $categorie == "jus") {
     $this->categorie = $categorie ; 
} else{
    $this->erreur("cela doit etre sois du jus de l'eau ou du vin") ;
}

} 
 
function set_contenance($contenance){
    if($contenance>0){
        $this->contenance = $contenance ; 
    } else{
        $this->erreur("la contenance doit etre superieur a 0");
    }
}

function set_est_alcoolisee($est_alcoolisee){
        $this->est_alcoolisee = $est_alcoolisee ;   
}

function get_categorie(){
    return $this->categorie ; 
}

function get_contenanace(){
    return $this->contenance ; 
}
function get_est_alcoolisee(){
    return $this->est_alcoolisee; 
}

function get_lib_est_alcoolisee(){
    return $this->est_alcoolisee ? 'oui' : 'non' ; 
}

function get_lib_contenance(){
    return $this->contenance . "L"; 
}
function afficher(){
    echo"<ul>";
    echo"<li> nom        : " . $this->nom . "</li>" ; 
    echo"<li> contenance        : " . $this->contenance . "</li>";
    echo"<li> categorie       : " . $this->categorie . "</li>";
    echo"<li> est_alcoolisee      : " . $this->get_lib_est_alcoolisee(). "</li>"; 
    echo '<li><p class="liste">contenance:'.$this->get_lib_contenance().
    '</p>'.PHP_EOL;
    echo "</ul>" ; 
}


}
