<?php
namespace FaucheurBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * AssociationMilitant
 *
 * @ORM\Table(name="association_militant", uniqueConstraints={@ORM\UniqueConstraint(name="association_militant_id_association_key", columns={"id_association"})})
 * @ORM\Entity
 */
class AssociationMilitant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_association", type="integer", nullable=false)
     */
    private $idAssociation;

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
     * Set idAssociation
     *
     * @param integer $idAssociation
     *
     * @return AssociationMilitant
     */
    public function setIdAssociation($idAssociation)
    {
        $this->idAssociation = $idAssociation;

        return $this;
    }

    /**
     * Get idAssociation
     *
     * @return integer
     */
    public function getIdAssociation()
    {
        return $this->idAssociation;
    }

    /**
     * Set idMilitant
     *
     * @param \FaucheurBundle\Entity\Militants $idMilitant
     *
     * @return AssociationMilitant
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
