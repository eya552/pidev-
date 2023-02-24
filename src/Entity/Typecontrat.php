<?php

namespace App\Entity;

use App\Repository\TypecontratRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TypecontratRepository::class)]
class Typecontrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    private ?string $typeContrat = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    #[Assert\Positive(message:"Prix doit etre un nombre positif")]
    private ?int $prix = null;

    #[ORM\OneToMany(mappedBy: 'typedecontrat', targetEntity: Contrat::class)]
    private Collection $contrat;

    public function __construct()
    {
        $this->contrat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContrat(): Collection
    {
        return $this->contrat;
    }

    public function addContrat(Contrat $contrat): self
    {
        if (!$this->contrat->contains($contrat)) {
            $this->contrat->add($contrat);
            $contrat->setTypedecontrat($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): self
    {
        if ($this->contrat->removeElement($contrat)) {
            // set the owning side to null (unless already changed)
            if ($contrat->getTypedecontrat() === $this) {
                $contrat->setTypedecontrat(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->typeContrat;
    }
}
