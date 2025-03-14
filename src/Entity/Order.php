<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\AST\Functions\CurrentTimestampFunction;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]

class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private ?User $user_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $sum = null;

    #[ORM\Column(type: Types::JSON)]
    private ?array $compound = [];

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'создан'])]
    private ?string $status = 'создан';


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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        if (!in_array($status, ['создан', 'отклонен', 'принят', 'выполнен'])) {
            throw new \InvalidArgumentException("Недопустимый статус заказа");
        }
        $this->status = $status;
        return $this;
    }
    
    public function getCompound(): ?array
    {
        return $this->compound;
    }

    public function setCompound(array $compound): static
    {
        $this->compound = $compound;
        return $this;
    }
    
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getSum(): ?int
    {
        return $this->sum;
    }

    public function setSum(int $sum): static
    {
        $this->sum = $sum;

        return $this;
    }
}
