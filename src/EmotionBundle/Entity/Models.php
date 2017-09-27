<?php

namespace EmotionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Models
 *
 * @ORM\Table(name="models")
 * @ORM\Entity(repositoryClass="EmotionBundle\Repository\ModelsRepository")
 */
class Models
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="id_brand", type="integer")
     */
    private $idBrand;


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
     * Set model
     *
     * @param string $model
     *
     * @return Models
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set idBrand
     *
     * @param integer $idBrand
     *
     * @return Models
     */
    public function setIdBrand($idBrand)
    {
        $this->idBrand = $idBrand;

        return $this;
    }

    /**
     * Get idBrand
     *
     * @return int
     */
    public function getIdBrand()
    {
        return $this->idBrand;
    }
}

