<?php

namespace AppBundle\Entity;

/**
 * LDF
 */
class LDF
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $bazisCode;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getBazisCode()
    {
        return $this->bazisCode;
    }

    /**
     * @param string $bazisCode
     */
    public function setBazisCode($bazisCode)
    {
        $this->bazisCode = $bazisCode;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}

