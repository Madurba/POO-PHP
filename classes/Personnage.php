<?php
class Personnage {
    /*
     * Attributs
     */
    private $_force         = 20;           // La force du personnage
    private $_localisation;                 // Sa localisation
    private $_experience    = 0;            // Son expérience
    private $_degats        = 0;            // Ses dégâts
    
    /*
     * Methodes
     */
    // Simple méthode test affichage texte
    public function parler() {
        echo 'Je suis un personnage virtuel RD2D !<br>';
    }
    
    // Méthode de gestion du déplacement du personnage
    public function deplacer() {
         
    }
    
    // Méthode de gestion de la frappe selon la force du personnage
    public function frapper(Personnage $persoAFrapper) {
        $persoAFrapper->_degats += $this->_force;
    }
    
    // Methode de gestion de l'expérience du personnage
    public function gagnerExperience() {
        $this->_experience = $this->_experience ++;  // Incrémente de la force
    }
    
    // Methode de gestion de l'affichage de l'expérience d'un personnage
    public function afficherExperience() {
        echo $this->_experience;
    }
    
    /*
     * Méthodes Accesseurs (Getters) - Pour récupérer la valeur d'un attribut
     */
    // Methode force() qui renvoie le contenu de l'attributs $_force
    public function force() {
        return $this->_force; 
    }
    
    // Methode experience() qui renvoie le contenu de l'attribut $_ecperience
    public function experience() {
        return $this->_experience;
    }
    
    // Methode degats() qui renvoie le contenu de l'attribut $_degats
    public function degats() {
        return $this->_degats;
    }
    
    /*
     * Méthodes Mutateurs - Pour modifier la valeur des attributs
     */
    // Mutateur qui modifie l'attribut $_force
    public  function setForce($force) {
        if (!is_int($force)) { // S'il ne s'agit pas d'un nombre entier.
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($force > 100) { // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_force = $force;
    }
    
    // Mutateur chargé de modifier l'attribut $_experience.
    public function setExperience($experience) {
        if (!is_int($experience)) { // S'il ne s'agit pas d'un nombre entier.
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($experience > 100) { // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_experience = $experience;
    }
}