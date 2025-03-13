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
    private ?int $addon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user): static
    {
        $this->user_id = $user;
        return $this;
    }

    public function getAddon(): ?int
    {
        return $this->addon;
    }

    public function setAddon(int $addon): static
    {
        $this->addon = $addon;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item_id;
    }

    public function setItemId(?Item $item): static
    {
        $this->item_id = $item;

        return $this;
    }

   
}
