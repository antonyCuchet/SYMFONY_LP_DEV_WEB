<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainerRepository")
 * @ORM\Table(name="CONTAINER")
 */
class Container
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\ManyToOne(targetEntity="ContainerProduct", inversedBy="containerId")
     * @ORM\JoinColumn(name="CONTAINER_ID", referencedColumnName="ID")
     * @ORM\Column(name="ID", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="COLOR", type="string", length=255)
     */
    private $color;

    /**
     * @ORM\OneToMany(targetEntity="ContainerModel", mappedBy="id")
     * @ORM\Column(name="CONTAINER_MODEL_ID", type="integer")
     */
    private $containerModelId;

    /**
     * @ORM\OneToMany(targetEntity="Containership", mappedBy="id")
     * @ORM\Column(name="CONTAINERSHIP_ID", type="integer")
     */
    private $containerShipId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getContainerModelId(): ?int
    {
        return $this->containerModelId;
    }

    public function setContainerModelId(int $containerModelId): self
    {
        $this->containerModelId = $containerModelId;

        return $this;
    }

    public function getContainerShipId(): ?int
    {
        return $this->containerShipId;
    }

    public function setContainerShipId(int $containerShipId): self
    {
        $this->containerShipId = $containerShipId;

        return $this;
    }
}
