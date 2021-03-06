<?php

namespace Myapp\SportBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */

 class Utilisateur
 {
     /**
      * @ORM\GeneratedValue
      * @ORM\Id
      * @ORM\Column(type="integer")
      */

      private $Id;
      /**
     * @ORM\Column(type="string")
     */    
      private $Nom;
      /**
     * @ORM\Column(type="string")
     */  
      private $Prenom;
      /**
     * @ORM\Column(type="date")
     */  
      private $DateNaissence;
      /**
     * @ORM\Column(type="string")
     */  
      private $Tele;
      /**
     * @ORM\Column(type="string")
     */  
      private $Email;
      /**
     * @ORM\Column(type="string")
     */  
      private $UserName;
      /**
     * @ORM\Column(type="string")
     */  
      private $PassWord;
      /**
     * @ORM\Column(type="integer")
     */  
      private $Conect;

       /**
     * @ORM\Column(type="string")
     */  
    private $Ville;

      /**
     * @ORM\Column(type="string")
     */  
    private $Photo;

     /**
     * @ORM\Column(type="string")
     */  
    private $Adresse;


 
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set dateNaissence
     *
     * @param \DateTime $dateNaissence
     *
     * @return Utilisateur
     */
    public function setDateNaissence($dateNaissence)
    {
        $this->DateNaissence = $dateNaissence;

        return $this;
    }

    /**
     * Get dateNaissence
     *
     * @return \DateTime
     */
    public function getDateNaissence()
    {
        return $this->DateNaissence;
    }

    /**
     * Set tele
     *
     * @param string $tele
     *
     * @return Utilisateur
     */
    public function setTele($tele)
    {
        $this->Tele = $tele;

        return $this;
    }

    /**
     * Get tele
     *
     * @return string
     */
    public function getTele()
    {
        return $this->Tele;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Utilisateur
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * Set passWord
     *
     * @param string $passWord
     *
     * @return Utilisateur
     */
    public function setPassWord($passWord)
    {
        $this->PassWord = $passWord;

        return $this;
    }

    /**
     * Get passWord
     *
     * @return string
     */
    public function getPassWord()
    {
        return $this->PassWord;
    }

    /**
     * Set conect
     *
     * @param integer $conect
     *
     * @return Utilisateur
     */
    public function setConect($conect)
    {
        $this->Conect = $conect;

        return $this;
    }

    /**
     * Get conect
     *
     * @return integer
     */
    public function getConect()
    {
        return $this->Conect;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Utilisateur
     */
    public function setVille($ville)
    {
        $this->Ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Utilisateur
     */
    public function setPhoto($photo)
    {
        $this->Photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->Photo;
    }

    /**
     * Get Adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;

        return $this;
    }
}
