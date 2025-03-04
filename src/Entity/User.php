<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: "user")]
    private $orders;

    #[ORM\OneToMany(targetEntity: Cart::class, mappedBy: "user")]
    private $carts;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $login = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $role = 'ROLE_USER';

    public function getRoles(): array
{
    return [$this->role ?? 'ROLE_USER'];
}

public function eraseCredentials(): void
{
    // Если у вас есть временные данные (например, plain password), очищайте их здесь
}

public function getUserIdentifier(): string
{
    return $this->login; 
}



    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): static
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getOrders(): ?array
{
    return $this->orders;
}

public function setOrders(array $orders): static
{
    $this->orders = $orders;

    return $this;
}

public function getCarts(): ?array
{
    return $this->carts;
}

public function setCarts(array $carts): static
{
    $this->carts = $carts;

    return $this;
}
}
