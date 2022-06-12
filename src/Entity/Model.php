<?php

namespace App\Entity;

use App\Repository\ModelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModelRepository::class)
 */
class Model
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $stamp_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $wheel;

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

    public function getStampId(): ?int
    {
        return $this->stamp_id;
    }

    public function setStampId(int $stamp_id): self
    {
        $this->stamp_id = $stamp_id;

        return $this;
    }

    public function getWheel(): ?string
    {
        return $this->wheel;
    }

    public function setWheel(string $wheel): self
    {
        $this->wheel = $wheel;

        return $this;
    }
}
