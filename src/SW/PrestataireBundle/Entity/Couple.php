<?php

namespace SW\PrestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couple
 *
 * @ORM\Table(name="couple")
 * @ORM\Entity(repositoryClass="SW\PrestataireBundle\Repository\CoupleRepository")
 */
class Couple
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateMariage", type="datetime")
     */
    private $dateMariage;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="SW\PrestataireBundle\Entity\Ville")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $id_user;

    /**
     * @var bool
     *
     * @ORM\Column(name="activer", type="boolean")
     */
    private $activer;


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
     * @return Couple
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
     * Set dateMariage
     *
     * @param \DateTime $dateMariage
     *
     * @return Couple
     */
    public function setDateMariage($dateMariage)
    {
        $this->dateMariage = $dateMariage;

        return $this;
    }

    /**
     * Get dateMariage
     *
     * @return \DateTime
     */
    public function getDateMariage()
    {
        return $this->dateMariage;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Couple
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set ville
     *
     * @param \SW\PrestataireBundle\Entity\Ville $ville
     *
     * @return Couple
     */
    public function setVille(\SW\PrestataireBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \SW\PrestataireBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }


    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Couple
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set activer
     *
     * @param boolean $activer
     *
     * @return Couple
     */
    public function setActiver($activer)
    {
        $this->activer = $activer;

        return $this;
    }

    /**
     * Get activer
     *
     * @return boolean
     */
    public function getActiver()
    {
        return $this->activer;
    }
}
