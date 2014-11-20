<?php
/*
Cette classe représente un utilisateur.
variables : - l'identifiant de l'utilisateur
            - le login de l'utilisateur
            - le mot de passe de l'utilisateur
            - le nom de l'utilisateur
            - le prénom de l'utilisateur
            - les droits de l'utilisateur
*/
class Utilisateur {
    private $id;
    private $login;
    private $password;
    private $nom;
    private $prenom;
    private $droits;
    
    /*
    Cette fonction permet d'appeler affecte si les valeurs sont bien transmises en paramètre
    paramètre : le tableau de valeurs des variables à initialiser 
    */
    
    public function __construct($valeurs = array())
    {
        if(!empty($valeurs))
        {
            $this->affecte($valeurs);
        }
    }
    
    /*
    Cette fonction permet d'initialiser les variables de la classe
    paramètre : le tableau de valeurs des variables à initialiser 
    */
        
    public function affecte($donnees)
    {
        foreach ($donnees as $attribut => $valeur){
            switch ($attribut){ 
                case 'idUtilisateur': $this->setId($valeur);break;
                case 'login': $this->setLogin($valeur);break;
                case 'password': $this->setPassword($valeur);break;
                case 'nom': $this->setNom($valeur);break;
                case 'prenom': $this->setPrenom($valeur);break;
                case 'droits': $this->setDroits($valeur);break;
            }
        }
    }
    
    /*
    Cette fonction retourne l'id de l'utilisateur
    */
    
    public function getId()
    {
        return $this->id;   
    }
    
    /*
    Cette fonction retourne le login de l'utilisateur
    */
    
    public function getLogin()
    {
        return $this->login;
    }   
    
    /*
    Cette fonction retourne le mot de passe de l'utilisateur
    */
    
    public function getPassword()
    {
        return $this->password;
    }
    
    /*
    Cette fonction retourne le nom de l'utilisateur
    */
    
    public function getNom()
    {
        return $this->nom;
    }
    
    /*
    Cette fonction retourne le prénom de l'utilisateur
    */
    
    public function getPrenom()
    {
        return $this->prenom;   
    }
    
    /*
    Cette fonction retourne les droits de l'utilisateur
    */
    
    public function getDroits()
    {
        return $this->droits;
    }
    
    /*
    Cette fonction permet de modifier la valeur de l'identifiant de l'utilisateur
    paramètre : la nouvelle valeur de l'identifiant
    */
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /*
    Cette fonction permet de modifier la valeur du login de l'utilisateur
    paramètre : la nouvelle valeur du login
    */
    
    public function setLogin($login)
    {
        $this->login = $login;
    }
    
    /*
    Cette fonction permet de modifier la valeur du mot de passe de l'utilisateur
    paramètre : la nouvelle valeur du mot de passe
    */
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /*
    Cette fonction permet de modifier la valeur du nom de l'utilisateur
    paramètre : la nouvelle valeur du nom
    */
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /*
    Cette fonction permet de modifier la valeur du prénom de l'utilisateur
    paramètre : la nouvelle valeur du prénom
    */
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    /*
    Cette fonction permet de modifier la valeur des droits de l'utilisateur
    paramètre : la nouvelle valeur des droits
    */
    
    public function setDroits($droits)
    {
        $this->droits = $droits;
    }
}
?>
