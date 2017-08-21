<?php
namespace FaucheurBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Competences
 *
 * @ORM\Table(name="competences")
 * @ORM\Entity
 */
class Competences
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_competence", type="string", length=150, nullable=true)
     */
    private $nomCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="detail_competence", type="string", length=150, nullable=true)
     */
    private $detailCompetence;

    /**
     * @var \Aptitude
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Aptitude")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_competence", referencedColumnName="id_militant")
     * })
     */
    private $idCompetence;



    /**
     * Set nomCompetence
     *
     * @param string $nomCompetence
     *
     * @return Competences
     */
    public function setNomCompetence($nomCompetence)
    {
        $this->nomCompetence = $nomCompetence;

        return $this;
    }

    /**
     * Get nomCompetence
     *
     * @return string
     */
    public function getNomCompetence()
    {
        return $this->nomCompetence;
    }

    /**
     * Set detailCompetence
     *
     * @param string $detailCompetence
     *
     * @return Competences
     */
    public function setDetailCompetence($detailCompetence)
    {
        $this->detailCompetence = $detailCompetence;

        return $this;
    }

    /**
     * Get detailCompetence
     *
     * @return string
     */
    public function getDetailCompetence()
    {
        return $this->detailCompetence;
    }

    /**
     * Set idCompetence
     *
     * @param \FaucheurBundle\Entity\Aptitude $idCompetence
     *
     * @return Competences
     */
    public function setIdCompetence(\FaucheurBundle\Entity\Aptitude $idCompetence = null)
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    /**
     * Get idCompetence
     *
     * @return \FaucheurBundle\Entity\Aptitude
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }
}
