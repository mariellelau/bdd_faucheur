<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Proximite
 *
 * @ORM\Table(name="proximite")
 * @ORM\Entity
 */
class Proximite
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_proximite", type="string", length=30, nullable=true)
     */
    private $nomProximite;

    /**
     * @var \Mailing
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mailing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proximite", referencedColumnName="id_proximite")
     * })
     */
    private $idProximite;



    /**
     * Set nomProximite
     *
     * @param string $nomProximite
     *
     * @return Proximite
     */
    public function setNomProximite($nomProximite)
    {
        $this->nomProximite = $nomProximite;

        return $this;
    }

    /**
     * Get nomProximite
     *
     * @return string
     */
    public function getNomProximite()
    {
        return $this->nomProximite;
    }

    /**
     * Set idProximite
     *
     * @param \FaucheurBundle\Entity\Mailing $idProximite
     *
     * @return Proximite
     */
    public function setIdProximite(\FaucheurBundle\Entity\Mailing $idProximite = null)
    {
        $this->idProximite = $idProximite;

        return $this;
    }

    /**
     * Get idProximite
     *
     * @return \FaucheurBundle\Entity\Mailing
     */
    public function getIdProximite()
    {
        return $this->idProximite;
    }
}
