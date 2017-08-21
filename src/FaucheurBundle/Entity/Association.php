<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity
 */
class Association
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_association", type="string", length=150, nullable=true)
     */
    private $nomAssociation;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer", nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=150, nullable=true)
     */
    private $type;

    /**
     * @var \AssociationMilitant
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AssociationMilitant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_association", referencedColumnName="id_militant")
     * })
     */
    private $idAssociation;



    /**
     * Set nomAssociation
     *
     * @param string $nomAssociation
     *
     * @return Association
     */
    public function setNomAssociation($nomAssociation)
    {
        $this->nomAssociation = $nomAssociation;

        return $this;
    }

    /**
     * Get nomAssociation
     *
     * @return string
     */
    public function getNomAssociation()
    {
        return $this->nomAssociation;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     *
     * @return Association
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Association
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idAssociation
     *
     * @param \FaucheurBundle\Entity\AssociationMilitant $idAssociation
     *
     * @return Association
     */
    public function setIdAssociation(\FaucheurBundle\Entity\AssociationMilitant $idAssociation = null)
    {
        $this->idAssociation = $idAssociation;

        return $this;
    }

    /**
     * Get idAssociation
     *
     * @return \FaucheurBundle\Entity\AssociationMilitant
     */
    public function getIdAssociation()
    {
        return $this->idAssociation;
    }
}
