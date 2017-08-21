<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Mailing
 *
 * @ORM\Table(name="mailing", uniqueConstraints={@ORM\UniqueConstraint(name="mailing_id_proximite_key", columns={"id_proximite"})})
 * @ORM\Entity
 */
class Mailing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_proximite", type="integer", nullable=false)
     */
    private $idProximite;

    /**
     * @var \Militants
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Militants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_militant", referencedColumnName="email_militant")
     * })
     */
    private $emailMilitant;



    /**
     * Set idProximite
     *
     * @param integer $idProximite
     *
     * @return Mailing
     */
    public function setIdProximite($idProximite)
    {
        $this->idProximite = $idProximite;

        return $this;
    }

    /**
     * Get idProximite
     *
     * @return integer
     */
    public function getIdProximite()
    {
        return $this->idProximite;
    }

    /**
     * Set emailMilitant
     *
     * @param \FaucheurBundle\Entity\Militants $emailMilitant
     *
     * @return Mailing
     */
    public function setEmailMilitant(\FaucheurBundle\Entity\Militants $emailMilitant = null)
    {
        $this->emailMilitant = $emailMilitant;

        return $this;
    }

    /**
     * Get emailMilitant
     *
     * @return \FaucheurBundle\Entity\Militants
     */
    public function getEmailMilitant()
    {
        return $this->emailMilitant;
    }
}
