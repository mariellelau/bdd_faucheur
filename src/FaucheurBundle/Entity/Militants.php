<?php

namespace FaucheurBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Militants
 *
 * @ORM\Table(name="militants", uniqueConstraints={@ORM\UniqueConstraint(name="militants_id_proximite_key", columns={"id_proximite"}), @ORM\UniqueConstraint(name="militants_email_militant_key", columns={"email_militant"})})
 * @ORM\Entity
 */
class Militants
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_militant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="militants_id_militant_seq", allocationSize=1, initialValue=1)
     */
    private $idMilitant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email_militant", type="string", length=100, nullable=false)
     */
    private $emailMilitant;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="id_proximite", type="string", length=15, nullable=false)
     */
    private $idProximite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=250, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer", nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=20, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=20, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=250, nullable=true)
     */
    private $notes;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Militants
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Militants
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set emailMilitant
     *
     * @param string $emailMilitant
     *
     * @return Militants
     */
    public function setEmailMilitant($emailMilitant)
    {
        $this->emailMilitant = $emailMilitant;

        return $this;
    }

    /**
     * Get emailMilitant
     *
     * @return string
     */
    public function getEmailMilitant()
    {
        return $this->emailMilitant;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Militants
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set idProximite
     *
     * @param string $idProximite
     *
     * @return Militants
     */
    public function setIdProximite($idProximite)
    {
        $this->idProximite = $idProximite;

        return $this;
    }

    /**
     * Get idProximite
     *
     * @return string
     */
    public function getIdProximite()
    {
        return $this->idProximite;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Militants
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Militants
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     *
     * @return Militants
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
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Militants
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Militants
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Militants
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
}
