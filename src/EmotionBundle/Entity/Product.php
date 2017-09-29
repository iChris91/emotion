<?php

namespace EmotionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="EmotionBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="serial_number", type="string", length=255)
     */
    private $serialNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="img_product", type="string", length=255)
     */
    private $imgProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="numberplate", type="string", length=255)
     */
    private $numberplate;

    /**
     * @var float
     *
     * @ORM\Column(name="km_number", type="float")
     */
    private $kmNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date", type="datetime")
     */
    private $purchaseDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="availability_date", type="datetime")
     */
    private $availabilityDate;


    /**
     * Get id
     *
     * @return int
     */
    /**
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="product")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     */
    private $brand;

    public function getId()
    {
        return $this->id;
    }

   
    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     *
     * @return Product
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Product
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set imgProduct
     *
     * @param string $imgProduct
     *
     * @return Product
     */
    public function setImgProduct($imgProduct)
    {
        $this->imgProduct = $imgProduct;

        return $this;
    }

    /**
     * Get imgProduct
     *
     * @return string
     */
    public function getImgProduct()
    {
        return $this->imgProduct;
    }

    /**
     * Set numberplate
     *
     * @param string $numberplate
     *
     * @return Product
     */
    public function setNumberplate($numberplate)
    {
        $this->numberplate = $numberplate;

        return $this;
    }

    /**
     * Get numberplate
     *
     * @return string
     */
    public function getNumberplate()
    {
        return $this->numberplate;
    }

    /**
     * Set kmNumber
     *
     * @param float $kmNumber
     *
     * @return Product
     */
    public function setKmNumber($kmNumber)
    {
        $this->kmNumber = $kmNumber;

        return $this;
    }

    /**
     * Get kmNumber
     *
     * @return float
     */
    public function getKmNumber()
    {
        return $this->kmNumber;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return Product
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set availabilityDate
     *
     * @param \DateTime $availabilityDate
     *
     * @return Product
     */
    public function setAvailabilityDate($availabilityDate)
    {
        $this->availabilityDate = $availabilityDate;

        return $this;
    }

    /**
     * Get availabilityDate
     *
     * @return \DateTime
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * Set idCategory
     *
     * @param integer $idCategory
     *
     * @return Product
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return int
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}

