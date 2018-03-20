<?php

namespace AppBundle\Entity;

/**
 * Project
 */

use AppBundle\Repository\RestRepository;
class Project
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    private $parent;

    private $status;

    private $hasRest;

    private $ldf;
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

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getHasRest()
    {
        return $this->hasRest;
    }

    /**
     * @param mixed $hasRest
     */
    public function setHasRest($hasRest)
    {
        $this->hasRest = $hasRest;
    }

    /**
     * @return mixed
     */
    public function getLdf()
    {
        return $this->ldf;
    }

    /**
     * @param mixed $ldf
     */
    public function setLdf($ldf)
    {
        $this->ldf = $ldf;
    }


}

