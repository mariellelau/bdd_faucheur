<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Aptitude
 *
 * @ORM\Table(name="aptitude", uniqueConstraints={@ORM\UniqueConstraint(name="aptitude_id_competence_key", columns={"id_competence"})})
 * @ORM\Entity
 */
class Aptitude
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer", nullable=false)
     */
    private $idCompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer", nullable=true)
     */
    private $niveau;

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
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return Aptitude
     */
    public function setIdCompetence($idCompetence)
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    /**
     * Get idCompetence
     *
     * @return integer
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return Aptitude
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set idMilitant
     *
     * @param \FaucheurBundle\Entity\Militants $idMilitant
     *
     * @return Aptitude
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
