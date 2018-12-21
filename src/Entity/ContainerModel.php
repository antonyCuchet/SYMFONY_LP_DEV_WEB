<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainerModelRepository")
 */
class ContainerModel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\ManyToOne(targetEntity="Container", inversedBy="containerId")
     * @ORM\JoinColumn(name="CONTAINER_MODEL_ID", referencedColumnName="ID")
     * @ORM\Column(name="ID", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="NAME", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="LENGTH", type="integer")
     */
    private $length;

    /**
     * @ORM\Column(name="WIDTH", type="integer")
     */
    private $width;

    /**
     * @ORM\Column(name="HEIGHT", type="integer")
     */
    private $height;

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

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }
}
