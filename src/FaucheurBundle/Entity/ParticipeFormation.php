<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipeFormation
 *
 * @ORM\Table(name="participe_formation", uniqueConstraints={@ORM\UniqueConstraint(name="participe_formation_id_formation_key", columns={"id_formation"})})
 * @ORM\Entity
 */
class ParticipeFormation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     */
    private $idFormation;

    /**
     * @var \Militants
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Militants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_militant", referencedColumnName="id_militant")
     * })
     */
    private $idMilitant;



    /**
     * Set idFormation
     *
     * @param integer $idFormation
     *
     * @return ParticipeFormation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    /**
     * Get idFormation
     *
     * @return integer
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set idMilitant
     *
     * @param \FaucheurBundle\Entity\Militants $idMilitant
     *
     * @return ParticipeFormation
     */
    public function setIdMilitant(\FaucheurBundle\Entity\Militants $idMilitant = null)
    {
        $this->idMilitant = $idMilitant;

        return $this;
    }

    /**
     * Get idMilitant
     *
     * @return \FaucheurBundle\Entity\Militants
     */
    public function getIdMilitant()
    {
        return $this->idMilitant;
    }
}
