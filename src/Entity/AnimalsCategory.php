<?php

namespace App\Entity;

use App\Repository\AnimalsCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnimalsCategoryRepository::class)]
class AnimalsCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'espèce doit être remplie")]
    #[Assert\Regex(
        pattern: "/^[^0-9]*$/",
        message: "Le champ ne doit pas contenir de chiffres"
    )]
    
    private ?string $Espece = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Race doit être remplie")]
    #[Assert\Regex(
        pattern: "/^[^0-9]*$/",
        message: "Le champ ne doit pas contenir de chiffres"
    )]
    
    private ?string $Race = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Animals::class)]
    private Collection $animals;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEspece(): ?string
    {
        return $this->Espece;
    }

    public function setEspece(string $Espece): self
    {
        $this->Espece = $Espece;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->Race;
    }

    public function setRace(string $Race): self
    {
        $this->Race = $Race;

        return $this;
    }

    /**
     * @return Collection<int, Animals>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animals $animal): self
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->setCategory($this);
        }

        return $this;
    }

    public function removeAnimal(Animals $animal): self
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getCategory() === $this) {
                $animal->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getId();
    }
  
}
