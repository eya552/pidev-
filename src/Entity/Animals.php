<?php

namespace App\Entity;

use App\Repository\AnimalsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnimalsRepository::class)]
class Animals
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le nom doit etre rempli")]
    #[Assert\Regex(
        pattern: "/^[^0-9]*$/",
        message: "Le nom ne doit pas contenir de chiffres"
    )]
    private ?string $NomAnimal = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateDeNaissance = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champ doit etre rempli par 'male' ou 'femele'")]
    #[Assert\Choice(choices: ['male', 'femelle'], message: "Veuillez répondre par 'male' ou 'femelle'")]

    private ?string $GenreAnimal = null;

    // #[ORM\Column(length: 255)]
    // private ?string $Espece = null;

    // #[ORM\Column(length: 255)]
    // private ?string $Race = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champ doit etre rempli par 'oui' ou 'non'")]
    #[Assert\Choice(choices: ['oui', 'non'], message: "Veuillez répondre par 'oui' ou 'non'")]
     private ?string $EstSterilise = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champ doit etre rempli par 'oui' ou 'non'")]
    #[Assert\Choice(choices: ['oui', 'non'], message: "Veuillez répondre par 'oui' ou 'non'")]
    private ?string $EstVaccine = null;

    #[ORM\ManyToOne(inversedBy: 'animals', cascade: ['persist'])]
    #[ORM\JoinColumn(name:"category_id", referencedColumnName:"id", onDelete:"CASCADE")]
    #[ORM\JoinColumn(nullable: false)]
    private ?AnimalsCategory $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAnimal(): ?string
    {
        return $this->NomAnimal;
    }

    public function setNomAnimal(string $NomAnimal): self
    {
        $this->NomAnimal = $NomAnimal;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->DateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $DateDeNaissance): self
    {
        $this->DateDeNaissance = $DateDeNaissance;

        return $this;
    }

    public function getGenreAnimal(): ?string
    {
        return $this->GenreAnimal;
    }

    public function setGenreAnimal(string $GenreAnimal): self
    {
        $this->GenreAnimal = $GenreAnimal;

        return $this;
    }

    // public function getEspece(): ?string
    // {
    //     return $this->Espece;
    // }

    // public function setEspece(string $Espece): self
    // {
    //     $this->Espece = $Espece;

    //     return $this;
    // }

    // public function getRace(): ?string
    // {
    //     return $this->Race;
    // }

    // public function setRace(string $Race): self
    // {
    //     $this->Race = $Race;

    //     return $this;
    // }

    public function getEstSterilise(): ?string
    {
        return $this->EstSterilise;
    }

    public function setEstSterilise(string $EstSterilise): self
    {
        $this->EstSterilise = $EstSterilise;

        return $this;
    }

    public function getEstVaccine(): ?string
    {
        return $this->EstVaccine;
    }

    public function setEstVaccine(string $EstVaccine): self
    {
        $this->EstVaccine = $EstVaccine;

        return $this;
    }

    public function getCategory(): ?AnimalsCategory
    {
        return $this->category;
    }

    public function setCategory(?AnimalsCategory $category): self
    {
        $this->category = $category;

        return $this;
    }
    public function __toString(): string
    {
        return $this->getId();
    }
}
