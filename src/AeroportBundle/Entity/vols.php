<?php

namespace AeroportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * vols
 *
 * @ORM\Table(name="vols")
 * @ORM\Entity(repositoryClass="AeroportBundle\Repository\volsRepository")
 */
class vols
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idVol;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=255)
     */
    private $depart;

    /**
     *
     * @ORM\OneToMany(targetEntity="AeroportBundle\Entity\user",mappedBy="vols")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="heur_depart", type="string", length=255)
     */
    private $heurDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="heur_arrive", type="string", length=255)
     */
    private $heurArrive;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="AeroportBundle\Entity\avions", cascade="persist")
     */
    private $Avion;


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
     * Set idVol
     *
     * @param integer $idVol
     *
     * @return vols
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
     * Set destination
     *
     * @param string $destination
     *
     * @return vols
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set depart
     *
     * @param string $depart
     *
     * @return vols
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set idUser
     *
     * @param array $idUser
     *
     * @return vols
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
     * Set heurDepart
     *
     * @param string $heurDepart
     *
     * @return vols
     */
    public function setHeurDepart($heurDepart)
    {
        $this->heurDepart = $heurDepart;

        return $this;
    }

    /**
     * Get heurDepart
     *
     * @return string
     */
    public function getHeurDepart()
    {
        return $this->heurDepart;
    }

    /**
     * Set heurArrive
     *
     * @param string $heurArrive
     *
     * @return vols
     */
    public function setHeurArrive($heurArrive)
    {
        $this->heurArrive = $heurArrive;

        return $this;
    }

    /**
     * Get heurArrive
     *
     * @return string
     */
    public function getHeurArrive()
    {
        return $this->heurArrive;
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
     * @return vols
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

    /**
     * Set avion
     *
     * @param \AeroportBundle\Entity\avions $avion
     *
     * @return vols
     */
    public function setAvion(\AeroportBundle\Entity\avions $avion = null)
    {
        $this->Avion = $avion;

        return $this;
    }

    /**
     * Get avion
     *
     * @return \AeroportBundle\Entity\avions
     */
    public function getAvion()
    {
        return $this->Avion;
    }
}
