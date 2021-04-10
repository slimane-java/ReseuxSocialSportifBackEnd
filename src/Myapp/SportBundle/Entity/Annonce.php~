<?php
namespace Myapp\SportBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */

class Annonce
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
   private $Titre;
    /**
     * @ORM\Column(type="string")
     */
   private $Ville;
    /**
     * @ORM\Column(type="string")
     */
   private $Adresse;
    /**
     * @ORM\Column(type="string")
     */
   private $Discription;
    /**
     * @ORM\Column(type="date")
     */
   private $DateAnnince;  
   /**
      * @ORM\Column(type="integer")
      */ 
   private $nbSignaler;
   /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @Assert\NotBlank()
     */    
    private $User1;

    /**
     * @ORM\ManyToMany(targetEntity="Utilisateur")
     */    

     private $User2;
    /**
     * @ORM\ManyToOne(targetEntity="Sport")
     * @Assert\NotBlank()
     */  
     private $Sport;

     /**
      * @ORM\Column(type="integer")
      */ 
     private $NbPressone;

      /**
     * @ORM\Column(type="string")
     */
   private $photo;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->User2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->Titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Annonce
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Annonce
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set discription
     *
     * @param string $discription
     *
     * @return Annonce
     */
    public function setDiscription($discription)
    {
        $this->Discription = $discription;

        return $this;
    }

    /**
     * Get discription
     *
     * @return string
     */
    public function getDiscription()
    {
        return $this->Discription;
    }

    /**
     * Set dateAnnince
     *
     * @param \DateTime $dateAnnince
     *
     * @return Annonce
     */
    public function setDateAnnince($dateAnnince)
    {
        $this->DateAnnince = $dateAnnince;

        return $this;
    }

    /**
     * Get dateAnnince
     *
     * @return \DateTime
     */
    public function getDateAnnince()
    {
        return $this->DateAnnince;
    }

    /**
     * Set nbSignaler
     *
     * @param integer $nbSignaler
     *
     * @return Annonce
     */
    public function setNbSignaler($nbSignaler)
    {
        $this->nbSignaler = $nbSignaler;

        return $this;
    }

    /**
     * Get nbSignaler
     *
     * @return integer
     */
    public function getNbSignaler()
    {
        return $this->nbSignaler;
    }

    /**
     * Set nbPressone
     *
     * @param integer $nbPressone
     *
     * @return Annonce
     */
    public function setNbPressone($nbPressone)
    {
        $this->NbPressone = $nbPressone;

        return $this;
    }

    /**
     * Get nbPressone
     *
     * @return integer
     */
    public function getNbPressone()
    {
        return $this->NbPressone;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Annonce
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set user1
     *
     * @param \Myapp\SportBundle\Entity\Utilisateur $user1
     *
     * @return Annonce
     */
    public function setUser1(\Myapp\SportBundle\Entity\Utilisateur $user1 = null)
    {
        $this->User1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return \Myapp\SportBundle\Entity\Utilisateur
     */
    public function getUser1()
    {
        return $this->User1;
    }

    /**
     * Add user2
     *
     * @param \Myapp\SportBundle\Entity\Utilisateur $user2
     *
     * @return Annonce
     */
    public function addUser2(\Myapp\SportBundle\Entity\Utilisateur $user2)
    {
        $this->User2[] = $user2;

        return $this;
    }

    /**
     * Remove user2
     *
     * @param \Myapp\SportBundle\Entity\Utilisateur $user2
     */
    public function removeUser2(\Myapp\SportBundle\Entity\Utilisateur $user2)
    {
        $this->User2->removeElement($user2);
    }

    /**
     * Get user2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser2()
    {
        return $this->User2;
    }

    /**
     * Set sport
     *
     * @param \Myapp\SportBundle\Entity\Sport $sport
     *
     * @return Annonce
     */
    public function setSport(\Myapp\SportBundle\Entity\Sport $sport = null)
    {
        $this->Sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return \Myapp\SportBundle\Entity\Sport
     */
    public function getSport()
    {
        return $this->Sport;
    }
}
