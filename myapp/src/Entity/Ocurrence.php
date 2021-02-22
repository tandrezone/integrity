<?php

namespace App\Entity;

use App\Repository\OcurrenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OcurrenceRepository::class)
 */
class Ocurrence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Request::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $request_id;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $char;

    /**
     * @ORM\Column(type="integer")
     */
    private $ocurrences;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequest(): ?Request
    {
        return $this->request_id;
    }

    public function setRequest(?Request $request): self
    {
        $this->request_id = $request;

        return $this;
    }

    public function getChar(): ?string
    {
        return $this->char;
    }

    public function setChar(string $char): self
    {
        $this->char = $char;

        return $this;
    }

    public function getOcurrences(): ?int
    {
        return $this->ocurrences;
    }

    public function setOcurrences(int $ocurrences): self
    {
        $this->ocurrences = $ocurrences;

        return $this;
    }
}
