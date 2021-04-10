<?php
namespace Myapp\SportBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Sport {
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

      * @ORM\Column(type="date")
      */
    private $DateCreation;
    /**

      * @ORM\Column(type="string")
      */
    private $Description;
    /**

      * @ORM\Column(type="integer")
      */
    private $Nbjoueur;

    /**
     * @ORM\Column(type="string")
     */
    private $Photo;




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
     * @return Sport
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Sport
     */
    public function setDateCreation($dateCreation)
    {
        $this->DateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->DateCreation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sport
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set nbjoueur
     *
     * @param integer $nbjoueur
     *
     * @return Sport
     */
    public function setNbjoueur($nbjoueur)
    {
        $this->Nbjoueur = $nbjoueur;

        return $this;
    }

    /**
     * Get nbjoueur
     *
     * @return integer
     */
    public function getNbjoueur()
    {
        return $this->Nbjoueur;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Sport
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
}
