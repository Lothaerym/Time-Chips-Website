<?php

namespace App\Entity;

use App\Repository\InformationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InformationRepository::class)
 */
class Information
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mondayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mondayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tuesdayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tuesdayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wednesdayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wednesdayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thursdayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thursdayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fridayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fridayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $saturdayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $saturdayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sundayStart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sundayEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMondayStart(): ?string
    {
        return $this->mondayStart;
    }

    public function setMondayStart(?string $mondayStart): self
    {
        $this->mondayStart = $mondayStart;

        return $this;
    }

    public function getMondayEnd(): ?string
    {
        return $this->mondayEnd;
    }

    public function setMondayEnd(?string $mondayEnd): self
    {
        $this->mondayEnd = $mondayEnd;

        return $this;
    }

    public function getTuesdayStart(): ?string
    {
        return $this->tuesdayStart;
    }

    public function setTuesdayStart(?string $tuesdayStart): self
    {
        $this->tuesdayStart = $tuesdayStart;

        return $this;
    }

    public function getTuesdayEnd(): ?string
    {
        return $this->tuesdayEnd;
    }

    public function setTuesdayEnd(?string $tuesdayEnd): self
    {
        $this->tuesdayEnd = $tuesdayEnd;

        return $this;
    }

    public function getWednesdayStart(): ?string
    {
        return $this->wednesdayStart;
    }

    public function setWednesdayStart(?string $wednesdayStart): self
    {
        $this->wednesdayStart = $wednesdayStart;

        return $this;
    }

    public function getWednesdayEnd(): ?string
    {
        return $this->wednesdayEnd;
    }

    public function setWednesdayEnd(?string $wednesdayEnd): self
    {
        $this->wednesdayEnd = $wednesdayEnd;

        return $this;
    }

    public function getThursdayStart(): ?string
    {
        return $this->thursdayStart;
    }

    public function setThursdayStart(?string $thursdayStart): self
    {
        $this->thursdayStart = $thursdayStart;

        return $this;
    }

    public function getThursdayEnd(): ?string
    {
        return $this->thursdayEnd;
    }

    public function setThursdayEnd(?string $thursdayEnd): self
    {
        $this->thursdayEnd = $thursdayEnd;

        return $this;
    }

    public function getFridayStart(): ?string
    {
        return $this->fridayStart;
    }

    public function setFridayStart(?string $fridayStart): self
    {
        $this->fridayStart = $fridayStart;

        return $this;
    }

    public function getFridayEnd(): ?string
    {
        return $this->fridayEnd;
    }

    public function setFridayEnd(?string $fridayEnd): self
    {
        $this->fridayEnd = $fridayEnd;

        return $this;
    }

    public function getSaturdayStart(): ?string
    {
        return $this->saturdayStart;
    }

    public function setSaturdayStart(?string $saturdayStart): self
    {
        $this->saturdayStart = $saturdayStart;

        return $this;
    }

    public function getSaturdayEnd(): ?string
    {
        return $this->saturdayEnd;
    }

    public function setSaturdayEnd(?string $saturdayEnd): self
    {
        $this->saturdayEnd = $saturdayEnd;

        return $this;
    }

    public function getSundayStart(): ?string
    {
        return $this->sundayStart;
    }

    public function setSundayStart(?string $sundayStart): self
    {
        $this->sundayStart = $sundayStart;

        return $this;
    }

    public function getSundayEnd(): ?string
    {
        return $this->sundayEnd;
    }

    public function setSundayEnd(?string $sundayEnd): self
    {
        $this->sundayEnd = $sundayEnd;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
