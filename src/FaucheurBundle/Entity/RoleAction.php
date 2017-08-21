<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * RoleAction
 *
 * @ORM\Table(name="role_action")
 * @ORM\Entity
 */
class RoleAction
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_role", type="string", length=150, nullable=true)
     */
    private $nomRole;

    /**
     * @var \ParticipeAction
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ParticipeAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role", referencedColumnName="id_role")
     * })
     */
    private $idRole;



    /**
     * Set nomRole
     *
     * @param string $nomRole
     *
     * @return RoleAction
     */
    public function setNomRole($nomRole)
    {
        $this->nomRole = $nomRole;

        return $this;
    }

    /**
     * Get nomRole
     *
     * @return string
     */
    public function getNomRole()
    {
        return $this->nomRole;
    }

    /**
     * Set idRole
     *
     * @param \FaucheurBundle\Entity\ParticipeAction $idRole
     *
     * @return RoleAction
     */
    public function setIdRole(\FaucheurBundle\Entity\ParticipeAction $idRole = null)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return \FaucheurBundle\Entity\ParticipeAction
     */
    public function getIdRole()
    {
        return $this->idRole;
    }
}
