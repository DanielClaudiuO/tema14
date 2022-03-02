<?php

namespace App\Entity;

use App\Repository\MarturiiAudioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarturiiAudioRepository::class)]
class MarturiiAudio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nume_autor;

    #[ORM\Column(type: 'string', length: 255)]
    private $titlu_mesaj;

    #[ORM\Column(type: 'date')]
    private $data;

    #[ORM\Column(type: 'string', length: 255)]
    private $path;

    #[ORM\Column(type: 'integer')]
    private $marturii_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeAutor(): ?string
    {
        return $this->nume_autor;
    }

    public function setNumeAutor(string $nume_autor): self
    {
        $this->nume_autor = $nume_autor;

        return $this;
    }

    public function getTitluMesaj(): ?string
    {
        return $this->titlu_mesaj;
    }

    public function setTitluMesaj(string $titlu_mesaj): self
    {
        $this->titlu_mesaj = $titlu_mesaj;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getMarturiiId(): ?int
    {
        return $this->marturii_id;
    }

    public function setMarturiiId(int $marturii_id): self
    {
        $this->marturii_id = $marturii_id;

        return $this;
    }
}
