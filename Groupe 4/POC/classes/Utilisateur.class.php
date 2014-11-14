<?php
class Utilisateur {
    private $id;
    private $login;
    private $password;
    private $nom;
    private $prenom;
    
    public function __construct($valeurs = array())
    {
        if(!empty($valeurs))
        {
            $this->affecte($valeurs);
        }
    }
        
    public function affecte($donnees)
    {
        foreach ($donnees as $attribut => $valeur){
            switch ($attribut){ 
                case 'idUtilisateur': $this->setId($valeur);break;
                case 'login': $this->setLogin($valeur);break;
                case 'password': $this->setPassword($valeur);break;
                case 'nom': $this->setNom($valeur);break;
                case 'prenom': $this->setPrenom($valeur);break;
            }
        }
    }
    
    public function getId()
    {
        return $this->id;   
    }
    
    public function getLogin()
    {
        return $this->login;
    }   
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;   
    }
    
    public function setId($id)
    {
        return $this->id = $id;
    }
    
    public function setLogin($login)
    {
        return $this->login = $login;
    }
    
    public function setPassword($password)
    {
        return $this->password = $password;
    }
    
    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
    
    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }
}
?>
