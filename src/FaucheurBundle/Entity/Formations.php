<?php
namespace FaucheurBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="formations", uniqueConstraints={@ORM\UniqueConstraint(name="formations_id_militant_key", columns={"id_militant"}), @ORM\UniqueConstraint(name="formations_id_campagne_key", columns={"id_campagne"})})
 * @ORM\Entity
 */
class Formations
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_formation", type="string", length=100, nullable=true)
     */
    private $nomFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_militant", type="integer", nullable=false)
     */
    private $idMilitant;

    /**
     * @var string
     *
     * @ORM\Column(name="type_formation", type="string", length=100, nullable=true)
     */
    private $typeFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedeb", type="datetime", nullable=true)
     */
    private $datedeb;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=100, nullable=true)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_campagne", type="integer", nullable=false)
     */
    private $idCampagne;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=250, nullable=true)
     */
    private $notes;

    /**
     * @var \ParticipeFormation
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ParticipeFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formation", referencedColumnName="id_militant")
     * })
     */
    private $idFormation;



    /**
     * Set nomFormation
     *
     * @param string $nomFormation
     *
     * @return Formations
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * Get nomFormation
     *
     * @return string
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * Set idMilitant
     *
     * @param integer $idMilitant
     *
     * @return Formations
     */
    public function setIdMilitant($idMilitant)
    {
        $this->idMilitant = $idMilitant;

        return $this;
    }

    /**
     * Get idMilitant
     *
     * @return integer
     */
    public function getIdMilitant()
    {
        return $this->idMilitant;
    }

    /**
     * Set typeFormation
     *
     * @param string $typeFormation
     *
     * @return Formations
     */
    public function setTypeFormation($typeFormation)
    {
        $this->typeFormation = $typeFormation;

        return $this;
    }

    /**
     * Get typeFormation
     *
     * @return string
     */
    public function getTypeFormation()
    {
        return $this->typeFormation;
    }

    /**
     * Set datedeb
     *
     * @param \DateTime $datedeb
     *
     * @return Formations
     */
    public function setDatedeb($datedeb)
    {
        $this->datedeb = $datedeb;

        return $this;
    }

    /**
     * Get datedeb
     *
     * @return \DateTime
     */
    public function getDatedeb()
    {
        return $this->datedeb;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Formations
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Formations
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set idCampagne
     *
     * @param integer $idCampagne
     *
     * @return Formations
     */
    public function setIdCampagne($idCampagne)
    {
        $this->idCampagne = $idCampagne;

        return $this;
    }

    /**
     * Get idCampagne
     *
     * @return integer
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Formations
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set idFormation
     *
     * @param \FaucheurBundle\Entity\ParticipeFormation $idFormation
     *
     * @return Formations
     */
    public function setIdFormation(\FaucheurBundle\Entity\ParticipeFormation $idFormation = null)
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    /**
     * Get idFormation
     *
     * @return \FaucheurBundle\Entity\ParticipeFormation
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }
}
