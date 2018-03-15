<?php

namespace AppBundle\Entity;

/**
 * Rest
 */
class Rest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var LDF
     */
    private $ldf;

    /**
     * @var Hangar
     */
    private $hangar;

    /**
     * @var Status
     */
    private $status;

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
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return LDF
     */
    public function getLdf()
    {
        return $this->ldf;
    }

    /**
     * @param LDF $ldf
     */
    public function setLdf($ldf)
    {
        $this->ldf = $ldf;
    }

    /**
     * @return Hangar
     */
    public function getHangar()
    {
        return $this->hangar;
    }

    /**
     * @param Hangar $hangar
     */
    public function setHangar($hangar)
    {
        $this->hangar = $hangar;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}

