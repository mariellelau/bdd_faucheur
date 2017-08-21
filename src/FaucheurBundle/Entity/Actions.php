<?php

namespace FaucheurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actions
 *
 * @ORM\Table(name="actions", uniqueConstraints={@ORM\UniqueConstraint(name="actions_id_campagne_key", columns={"id_campagne"})})
 * @ORM\Entity
 */
class Actions
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_action", type="string", length=100, nullable=true)
     */
    private $nomAction;

    /**
     * @var string
     *
     * @ORM\Column(name="type_action", type="string", length=100, nullable=true)
     */
    private $typeAction;

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
     * @var \ParticipeAction
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ParticipeAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_action", referencedColumnName="id_action")
     * })
     */
    private $idAction;



    /**
     * Set nomAction
     *
     * @param string $nomAction
     *
     * @return Actions
     */
    public function setNomAction($nomAction)
    {
        $this->nomAction = $nomAction;

        return $this;
    }

    /**
     * Get nomAction
     *
     * @return string
     */
    public function getNomAction()
    {
        return $this->nomAction;
    }

    /**
     * Set typeAction
     *
     * @param string $typeAction
     *
     * @return Actions
     */
    public function setTypeAction($typeAction)
    {
        $this->typeAction = $typeAction;

        return $this;
    }

    /**
     * Get typeAction
     *
     * @return string
     */
    public function getTypeAction()
    {
        return $this->typeAction;
    }

    /**
     * Set datedeb
     *
     * @param \DateTime $datedeb
     *
     * @return Actions
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
     * @return Actions
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
     * @return Actions
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
     * @return Actions
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
     * Set idAction
     *
     * @param \FaucheurBundle\Entity\ParticipeAction $idAction
     *
     * @return Actions
     */
    public function setIdAction(\FaucheurBundle\Entity\ParticipeAction $idAction = null)
    {
        $this->idAction = $idAction;

        return $this;
    }

    /**
     * Get idAction
     *
     * @return \FaucheurBundle\Entity\ParticipeAction
     */
    public function getIdAction()
    {
        return $this->idAction;
    }
}
