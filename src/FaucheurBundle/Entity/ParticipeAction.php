<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipeAction
 *
 * @ORM\Table(name="participe_action", uniqueConstraints={@ORM\UniqueConstraint(name="participe_action_id_action_key", columns={"id_action"}), @ORM\UniqueConstraint(name="participe_action_id_role_key", columns={"id_role"})})
 * @ORM\Entity
 */
class ParticipeAction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_action", type="integer", nullable=false)
     */
    private $idAction;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     */
    private $idRole;

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
     * Set idAction
     *
     * @param integer $idAction
     *
     * @return ParticipeAction
     */
    public function setIdAction($idAction)
    {
        $this->idAction = $idAction;

        return $this;
    }

    /**
     * Get idAction
     *
     * @return integer
     */
    public function getIdAction()
    {
        return $this->idAction;
    }

    /**
     * Set idRole
     *
     * @param integer $idRole
     *
     * @return ParticipeAction
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return integer
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set idMilitant
     *
     * @param \FaucheurBundle\Entity\Militants $idMilitant
     *
     * @return ParticipeAction
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
