<?php

namespace EmotionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rent
 *
 * @ORM\Table(name="rent")
 * @ORM\Entity(repositoryClass="EmotionBundle\Repository\RentRepository")
 */
class Rent
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
     * @ORM\Column(name="product_name", type="string", length=255)
     */
    private $productName;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rental", type="datetime")
     */
    private $dateRental;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_delivery", type="datetime")
     */
    private $dateDelivery;

    /**
     * @var int
     *
     * @ORM\Column(name="max_km", type="integer")
     */
    private $maxKm;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_rent", type="integer")
     */
    private $idProductRent;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;


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
     * Set productName
     *
     * @param string $productName
     *
     * @return Rent
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Rent
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateRental
     *
     * @param \DateTime $dateRental
     *
     * @return Rent
     */
    public function setDateRental($dateRental)
    {
        $this->dateRental = $dateRental;

        return $this;
    }

    /**
     * Get dateRental
     *
     * @return \DateTime
     */
    public function getDateRental()
    {
        return $this->dateRental;
    }

    /**
     * Set dateDelivery
     *
     * @param \DateTime $dateDelivery
     *
     * @return Rent
     */
    public function setDateDelivery($dateDelivery)
    {
        $this->dateDelivery = $dateDelivery;

        return $this;
    }

    /**
     * Get dateDelivery
     *
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Set maxKm
     *
     * @param integer $maxKm
     *
     * @return Rent
     */
    public function setMaxKm($maxKm)
    {
        $this->maxKm = $maxKm;

        return $this;
    }

    /**
     * Get maxKm
     *
     * @return int
     */
    public function getMaxKm()
    {
        return $this->maxKm;
    }

    /**
     * Set idProductRent
     *
     * @param integer $idProductRent
     *
     * @return Rent
     */
    public function setIdProductRent($idProductRent)
    {
        $this->idProductRent = $idProductRent;

        return $this;
    }

    /**
     * Get idProductRent
     *
     * @return int
     */
    public function getIdProductRent()
    {
        return $this->idProductRent;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Rent
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}

