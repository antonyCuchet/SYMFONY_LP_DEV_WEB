<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainershipRepository")
 * @ORM\Table(name="CONTAINERSHIP")
 */
class Containership
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\ManyToOne(targetEntity="Container", inversedBy="containerShipId")
     * @ORM\JoinColumn(name="CONTAINERSHIP_ID", referencedColumnName="ID")
     * @ORM\Column(name="ID", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="NAME", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="CAPTAIN_NAME", type="string", length=255)
     */
    private $captainName;

    /**
     * @ORM\Column(name="Container_LIMIT", type="integer")
     */
    private $containerLimit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCaptainName(): ?string
    {
        return $this->captainName;
    }

    public function setCaptainName(string $captainName): self
    {
        $this->captainName = $captainName;

        return $this;
    }

    public function getContainerLimit(): ?int
    {
        return $this->containerLimit;
    }

    public function setContainerLimit(int $containerLimit): self
    {
        $this->containerLimit = $containerLimit;

        return $this;
    }
}
