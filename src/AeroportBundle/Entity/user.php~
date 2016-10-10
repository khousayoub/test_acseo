<?php

namespace AeroportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as Users;


/**
 * user
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AeroportBundle\Repository\userRepository")
 */
class user extends Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id_user;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AeroportBundle\Entity\avions", inversedBy="user") // Pour dire qu'on peut avoir plusieur passagers qui ont la même avion
     * @ORM\JoinColumn(nullable=false)
     */
    private $Avion;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AeroportBundle\Entity\avions", inversedBy="user") // Pour dire qu'on peut avoir plusieur passagers qui ont le même vol
     * @ORM\JoinColumn(nullable=false)
     */
    private $vol;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Set avion
     *
     * @param \AeroportBundle\Entity\avions $avion
     *
     * @return user
     */
    public function setAvion(\AeroportBundle\Entity\avions $avion)
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

    /**
     * Set vol
     *
     * @param \AeroportBundle\Entity\avions $vol
     *
     * @return user
     */
    public function setVol(\AeroportBundle\Entity\avions $vol)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return \AeroportBundle\Entity\avions
     */
    public function getVol()
    {
        return $this->vol;
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
}
