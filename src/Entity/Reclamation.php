<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'reclamation', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?BilanDeSoin $Bilan = null;

    #[ORM\Column(length: 255)]
    private ?string $IdClient = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Text = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    private ?string $etat = 'non etudié';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBilan(): ?BilanDeSoin
    {
        return $this->Bilan;
    }

    public function setBilan(BilanDeSoin $Bilan): self
    {
        $this->Bilan = $Bilan;

        return $this;
    }

    public function getIdClient(): ?string
    {
        return $this->IdClient;
    }

    public function setIdClient(string $IdClient): self
    {
        $this->IdClient = $IdClient;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
    //  public function __toString() {
    //     return $this->etat;
    // }
}
