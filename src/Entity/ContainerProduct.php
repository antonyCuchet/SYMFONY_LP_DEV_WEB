<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainerProductRepository")
 */
class ContainerProduct
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="ID", type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Container", mappedBy="id")
     * @ORM\Column(name="CONTAINER_ID", type="integer")
     */
    private $containerId;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="id")
     * @ORM\Column(name="PRODUCT_ID", type="integer")
     */
    private $productId;

    /**
     * @ORM\Column(name="QUANTITY", type="integer")
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContainerId(): ?int
    {
        return $this->containerId;
    }

    public function setContainerId(int $containerId): self
    {
        $this->containerId = $containerId;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
