
<?php

/**
 * Description de Compte
 * 
 * Compte bancaire
 *
 * @author jef
 */
class compteDepot{
  private $possede_chequier = "";
  private $possede_cb =""; 

function __construct($possede_chequier, $possede_cb){
  $this->set_possede_chequier("false"); 
  $this->set_possede_cb("false");
}

  function set_possede_cb($possede_cb){
   if ( $possede_cb = "false") {
    $this->possede_cb = 0 ;
   } else {
    $this->erreur("kaka");
    

  }
  
  
}






class Compte {

  /**
   * Propriétés
   */
  private $devise = "?";
  private $solde = 0;
  private $titulaire = "???";

  /**
   * Constructeur
   * @param string $titulaire
   * @param float $solde
   */
  function __construct($titulaire, $solde = 0) {
    $this->commande("Créer le compte de " . $titulaire);
    $this->set_solde($solde);
    $this->set_titulaire($titulaire);
    $this->set_devise("€");
    $this->reponse('salut, je suis le compte de ' . $this->get_titulaire());
  }

  /**
   * Destructeur
   */
  function __destruct() {
    $this->reponse('Adieu...');
  }

  /**
   * Getter et setter   
   */
  function get_devise() {
    return $this->devise;
  }

  function get_solde() {
    return $this->solde;
  }

  function get_titulaire() {
    return $this->titulaire;
  }

  function set_devise($devise) {
    if ($devise == "€" || $devise == "$") {
      $this->devise = $devise;
    } else {
      $this->erreur("la devise doit être $ ou € : " . $devise);
    }
  }

  function set_solde($solde) {
    if ($solde >= 0) {
      $this->solde = $solde;
    } else {
      $this->erreur("Erreur : le solde doit être >=0 : " . $solde. $this->get_devise());
    }
  }

  function set_titulaire($titulaire) {
    $this->titulaire = $titulaire;
  }

  /**
   * Retourne le solde suivi de la devise
   * @return string
   */
  function get_lib_solde() {
    return $this->solde . " " . $this->devise;
  }

  /**
   * Crédite le compte
   * @param float $montant
   */
  function crediter($montant) {
    $this->commande("créditer " . $montant . $this->get_devise());
    $montant = abs($montant);
    $nouveau_solde = $this->get_solde() + $montant;
    $this->set_solde($nouveau_solde);
  }

  /**
   * Débite le compte
   * @param type $montant
   */
  function debiter($montant) {
    $this->commande("debiter " . $montant . $this->get_devise());
    $montant = abs($montant) ; 
    $nouveau_solde = $this->get_solde() - $montant;
    $this->set_solde($nouveau_solde);
  }

  /**
   * Affiche une commande
   * @param string $message
   */
  function commande($message) {
    echo '<p class="commande">Commande : ' . $message . '</p>' . PHP_EOL;
  }

  /**
   * Affiche une réponse
   * @param string $message
   */
  function reponse($message) {
    echo '<p class="reponse">Reponse : ' . $message . '</p>' . PHP_EOL;
  }

  /**
   * Affiche un message d'erreur
   * @param type $message
   */
  function erreur($message) {
    echo '<p class="erreur">Erreur : ' . $message . '</p>' . PHP_EOL;
  }

  /**
   * Affiche une description du compte
   */
  function afficher() {
    $this->commande("paramètres du compte de " . $this->get_titulaire());
    echo '<div>' . PHP_EOL;
    echo "<ul>" . PHP_EOL;
    echo "<li>Devise : " . $this->get_devise() . "</li>" . PHP_EOL;
    echo "<li>Solde : " . $this->get_lib_solde() . "</li>" . PHP_EOL;
    echo "<li>Titulaire : " . $this->get_titulaire() . "</li>" . PHP_EOL;
    echo "<li>Possede chequier :" . $this->get_lib_possede_chequier() . "<li>" . PHP_EOL; 
    echo "</ul>" . PHP_EOL;
    echo '</div>' . PHP_EOL;
  }

}