<?php

namespace App\Entity;

use App\Repository\RequestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequestRepository::class)
 */
class Request
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $request_url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $redirect_url;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $time;

    public function __construct()
    {
        $this->time = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequestUrl(): ?string
    {
        return $this->request_url;
    }

    public function setRequestUrl(string $request_url): self
    {
        $this->request_url = $request_url;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirect_url;
    }

    public function setRedirectUrl(?string $redirect_url): self
    {
        $this->redirect_url = $redirect_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time->format('Y-m-d H:i:s');
    }
}
