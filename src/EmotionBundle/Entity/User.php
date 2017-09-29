<?php

namespace EmotionBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="birth_date", type="date")
     *
     * @Assert\NotBlank(groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=100,
     *     minMessage="Nom de ville trop court",
     *     maxMessage="Nom de ville trop long",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $birthDate;

    /**
     * @ORM\Column(name="zip_code", type="string", length=255)
     *
     * @Assert\NotBlank(message="Code Postal", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=100,
     *     minMessage="Nom de ville trop court",
     *     maxMessage="Nom de ville trop long",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $zipCode;

    /**
     * @ORM\Column(name="city", type="string", length=255)
     *
     * @Assert\NotBlank(message="Ville", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=100,
     *     minMessage="Nom de ville trop court",
     *     maxMessage="Nom de ville trop long",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $city;

    /**
     * @ORM\Column(name="adress", type="string", length=255)
     *
     * @Assert\NotBlank(message="Adresse", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Adresse trop courte.",
     *     maxMessage="Adresse trop longue",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $adress;

    /**
     * @ORM\Column(name="phone", type="string", length=255)
     *
     * @Assert\NotBlank(message="Numero de téléphone", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=9,
     *     max=11,
     *     minMessage="Numéro de téléphone trop court",
     *     maxMessage="Numéro de téléphone trop long",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $phone;

    /**
     * @ORM\Column(name="driver_license", type="string", length=255)
     *
     * @Assert\NotBlank(message="Numéro de permis", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="le numéro de permis est trop long",
     *     maxMessage="le numéro de permis est trop court",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $driverLicense;


     public function getId()
    {
        return $this->id;
    }
   
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return User
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
        return $this;
    }
    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }
    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set driverLicense
     *
     * @param string $driverLicense
     *
     * @return User
     */
    public function setDriverLicense($driverLicense)
    {
        $this->driverLicense = $driverLicense;
        return $this;
    }
    /**
     * Get driverLicense
     *
     * @return string
     */
    public function getDriverLicense()
    {
        return $this->driverLicense;
    }

   
}

