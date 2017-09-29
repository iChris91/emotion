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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

}

