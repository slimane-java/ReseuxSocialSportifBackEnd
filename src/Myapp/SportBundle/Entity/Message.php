<?php

namespace Myapp\SportBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 */


class Message
{
    /**
      * @ORM\GeneratedValue
      * @ORM\Id
      * @ORM\Column(type="integer")
      */
    private $Id;
    /**
     *   @ORM\Column(type="string")
     */
    private $Messages;
    /**
     *  @ORM\Column(type="date")
     */
    private $DateMessage;
  
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
     * Set messages
     *
     * @param string $messages
     *
     * @return Message
     */
    public function setMessages($messages)
    {
        $this->Messages = $messages;

        return $this;
    }

    /**
     * Get messages
     *
     * @return string
     */
    public function getMessages()
    {
        return $this->Messages;
    }

    /**
     * Set dateMessage
     *
     * @param \DateTime $dateMessage
     *
     * @return Message
     */
    public function setDateMessage($dateMessage)
    {
        $this->DateMessage = $dateMessage;

        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return \DateTime
     */
    public function getDateMessage()
    {
        return $this->DateMessage;
    }

    /**
     * Set user1
     *
     * @param \Myapp\SportBundle\Entity\Utilisateur $user1
     *
     * @return Message
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
     * @return Message
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
