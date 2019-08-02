<?php

namespace SW\PrestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheInformations
 *
 * @ORM\Table(name="fiche_informations")
 * @ORM\Entity(repositoryClass="SW\PrestataireBundle\Repository\FicheInformationsRepository")
 */
class FicheInformations
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity="SW\PrestataireBundle\Entity\SousCategorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sousCategorie;

    /**
     * @ORM\OneToMany(targetEntity="SW\PrestataireBundle\Entity\InformationSpecifique", mappedBy="ficheInformations", cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $informationSpecifiques;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return FicheInformations
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->informationSpecifiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add informationSpecifique
     *
     * @param \SW\PrestataireBundle\Entity\InformationSpecifique $informationSpecifique
     *
     * @return FicheInformations
     */
    public function addInformationSpecifique(\SW\PrestataireBundle\Entity\InformationSpecifique $informationSpecifique)
    {
        $this->informationSpecifiques[] = $informationSpecifique;

        return $this;
    }

    /**
     * Remove informationSpecifique
     *
     * @param \SW\PrestataireBundle\Entity\InformationSpecifique $informationSpecifique
     */
    public function removeInformationSpecifique(\SW\PrestataireBundle\Entity\InformationSpecifique $informationSpecifique)
    {
        $this->informationSpecifiques->removeElement($informationSpecifique);
    }

    /**
     * Get informationSpecifiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInformationSpecifiques()
    {
        return $this->informationSpecifiques;
    }

    /**
     * Set sousCategorie
     *
     * @param \SW\PrestataireBundle\Entity\SousCategorie $sousCategorie
     *
     * @return FicheInformations
     */
    public function setSousCategorie(\SW\PrestataireBundle\Entity\SousCategorie $sousCategorie)
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    /**
     * Get sousCategorie
     *
     * @return \SW\PrestataireBundle\Entity\SousCategorie
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }
}
