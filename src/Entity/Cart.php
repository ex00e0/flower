<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private ?User $user_id = null;

    #[ORM\ManyToOne(targetEntity: Item::class, inversedBy: 'carts')]
    #[ORM\JoinColumn(name: 'item_id', referencedColumnName: 'id')]
    private ?Item $item_id = null;

    #[ORM\Column(nullable: true)]
    private ?array $addon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->item_id;
    }

    public function setItemId(int $item_id): static
    {
        $this->item_id = $item_id;

        return $this;
    }

    public function getAddon(): ?array
    {
        return $this->addon;
    }

    public function setAddon(?array $addon): static
    {
        $this->addon = $addon;

        return $this;
    }
}
