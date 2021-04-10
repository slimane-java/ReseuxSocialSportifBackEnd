<?php
namespace Myapp\SportBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */

class Invertation
{
    /**
      * @ORM\GeneratedValue
      * @ORM\Id
      * @ORM\Column(type="integer")
      */
      private $Id;
       /**
     * @ORM\Column(type="date")
     */
      private $DateEnvoiyer;
       /**
     * @ORM\Column(type="boolean")
     */

      private $valider;
      /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @Assert\NotBlank()
     */  
      private $User1;
      /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @Assert\NotBlank()
     */  
      private $User2;

   

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
     * Set dateEnvoiyer
     *
     * @param \DateTime $dateEnvoiyer
     *
     * @return Invertation
     */
    public function setDateEnvoiyer($dateEnvoiyer)
    {
        $this->DateEnvoiyer = $dateEnvoiyer;

        return $this;
    }

    /**
     * Get dateEnvoiyer
     *
     * @return \DateTime
     */
    public function getDateEnvoiyer()
    {
        return $this->DateEnvoiyer;
    }

    /**
     * Set valider
     *
     * @param boolean $valider
     *
     * @return Invertation
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set user1
     *
     * @param \Myapp\SportBundle\Entity\Utilisateur $user1
     *
     * @return Invertation
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
     * Set user2
     *
     * @param \Myapp\SportBundle\Entity\Utilisateur $user2
     *
     * @return Invertation
     */
    public function setUser2(\Myapp\SportBundle\Entity\Utilisateur $user2 = null)
    {
        $this->User2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return \Myapp\SportBundle\Entity\Utilisateur
     */
    public function getUser2()
    {
        return $this->User2;
    }
}
