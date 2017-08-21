<?php

namespace FaucheurBundle\Entity;

/**
 * Test
 */
class Test
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $champ1;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set champ1
     *
     * @param string $champ1
     *
     * @return Test
     */
    public function setChamp1($champ1)
    {
        $this->champ1 = $champ1;

        return $this;
    }

    /**
     * Get champ1
     *
     * @return string
     */
    public function getChamp1()
    {
        return $this->champ1;
    }
}
