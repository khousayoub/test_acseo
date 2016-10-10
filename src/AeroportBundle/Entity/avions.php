<?php

namespace AeroportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * avions
 *
 * @ORM\Table(name="avions")
 * @ORM\Entity(repositoryClass="AeroportBundle\Repository\avionsRepository")
 */
class avions
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAvion;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_avion", type="string")
     */
    private $nom_avion;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="AeroportBundle\Entity\vols", cascade={"persist"}) // Un vol correspond à une avion
     */
    private $idVol;

    /**
     * @ORM\OneToMany(targetEntity="AeroportBundle\Entity\user",mappedBy="avions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     */
    private $capacity;


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
     * Set idAvion
     *
     * @param integer $idAvion
     *
     * @return avions
     */
    public function setIdAvion($idAvion)
    {
        $this->idAvion = $idAvion;

        return $this;
    }

    /**
     * Get idAvion
     *
     * @return int
     */
    public function getIdAvion()
    {
        return $this->idAvion;
    }

    /**
     * Set idVol
     *
     * @param integer $idVol
     *
     * @return avions
     */
    public function setIdVol($idVol)
    {
        $this->idVol = $idVol;

        return $this;
    }

    /**
     * Get idVol
     *
     * @return int
     */
    public function getIdVol()
    {
        return $this->idVol;
    }

    /**
     * Set idUser
     *
     * @param array $idUser
     *
     * @return avions
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return array
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return avions
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set nomAvion
     *
     * @param string $nomAvion
     *
     * @return avions
     */
    public function setNomAvion($nomAvion)
    {
        $this->nom_avion = $nomAvion;

        return $this;
    }

    /**
     * Get nomAvion
     *
     * @return string
     */
    public function getNomAvion()
    {
        return $this->nom_avion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idUser
     *
     * @param \AeroportBundle\Entity\user $idUser
     *
     * @return avions
     */
    public function addIdUser(\AeroportBundle\Entity\user $idUser)
    {
        $this->idUser[] = $idUser;

        return $this;
    }

    /**
     * Remove idUser
     *
     * @param \AeroportBundle\Entity\user $idUser
     */
    public function removeIdUser(\AeroportBundle\Entity\user $idUser)
    {
        $this->idUser->removeElement($idUser);
    }
}
