<?php

namespace SW\PrestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity(repositoryClass="SW\PrestataireBundle\Repository\DiscussionRepository")
 */
class Discussion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity="SW\PrestataireBundle\Entity\Couple")
     * @ORM\JoinColumn(nullable=false)
     */
    private $couple;

    /**
     * @ORM\ManyToOne(targetEntity="SW\PrestataireBundle\Entity\Prestataire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prestataire;

    /**
     * @ORM\OneToMany(targetEntity="SW\PrestataireBundle\Entity\LigneMessage", mappedBy="discussion", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $ligneMessages;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Discussion
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set couple
     *
     * @param \SW\PrestataireBundle\Entity\Couple $couple
     *
     * @return Discussion
     */
    public function setCouple(\SW\PrestataireBundle\Entity\Couple $couple)
    {
        $this->couple = $couple;

        return $this;
    }

    /**
     * Get couple
     *
     * @return \SW\PrestataireBundle\Entity\Couple
     */
    public function getCouple()
    {
        return $this->couple;
    }

    /**
     * Set prestataire
     *
     * @param \SW\PrestataireBundle\Entity\Prestataire $prestataire
     *
     * @return Discussion
     */
    public function setPrestataire(\SW\PrestataireBundle\Entity\Prestataire $prestataire)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \SW\PrestataireBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligneMessages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligneMessage
     *
     * @param \SW\PrestataireBundle\Entity\LigneMessage $ligneMessage
     *
     * @return Discussion
     */
    public function addLigneMessage(\SW\PrestataireBundle\Entity\LigneMessage $ligneMessage)
    {
        $this->ligneMessages[] = $ligneMessage;

        return $this;
    }

    /**
     * Remove ligneMessage
     *
     * @param \SW\PrestataireBundle\Entity\LigneMessage $ligneMessage
     */
    public function removeLigneMessage(\SW\PrestataireBundle\Entity\LigneMessage $ligneMessage)
    {
        $this->ligneMessages->removeElement($ligneMessage);
    }

    /**
     * Get ligneMessages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneMessages()
    {
        return $this->ligneMessages;
    }
}
