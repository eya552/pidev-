<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"il est obligatoire d'ajouter Id client")]
    private ?string $idclient = null;
   

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"il est obligatoire d'ajouter Id animal")]
    private ?string $idanimal = null;
    
/**
 * @var \DateTime
 *
 *@ORM\Column(name="date_actualite", type="date")
 */
#[Assert\NotBlank(message:"il est obligatoire d'ajouter date de debut")]
private $datededebut;

/**
 * @var \DateTime
 *
 * @ORM\Column(name="date_actualite", type="date")
 */
#[Assert\NotBlank(message:"il est obligatoire d'ajouter date de fin")]
private $datedefin;

  //  #[ORM\Column(type: Types::DATE_MUTABLE)]
   // private ?\DateTimeInterface $datededebut = null;

   // #[ORM\Column(type: Types::DATE_MUTABLE)]
    //private ?\DateTimeInterface $datedefin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"il est obligatoire d'ajouter la franchise")]
    private ?string $franchise = null;
   
    #[ORM\ManyToOne(inversedBy: 'contrat')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message:"il est obligatoire d'ajouter Type de contrat")]
    private ?Typecontrat $typedecontrat = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdclient(): ?string
    {
        return $this->idclient;
    }

    public function setIdclient(string $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIdanimal(): ?string
    {
        return $this->idanimal;
    }

    public function setIdanimal(string $idanimal): self
    {
        $this->idanimal = $idanimal;

        return $this;
    }

    public function getDatededebut(): ?\DateTimeInterface
    {
        return $this->datededebut;
    }

    public function setDatededebut(\DateTimeInterface $datededebut): self
    {
        $this->datededebut = $datededebut;

        return $this;
    }

    public function getDatedefin(): ?\DateTimeInterface
    {
        return $this->datedefin;
    }

    public function setDatedefin(\DateTimeInterface $datedefin): self
    {
        $this->datedefin = $datedefin;

        return $this;
    }

    public function getFranchise(): ?string
    {
        return $this->franchise;
    }

    public function setFranchise(string $franchise): self
    {
        $this->franchise = $franchise;

        return $this;
    }

    public function getTypedecontrat(): ?Typecontrat
    {
        return $this->typedecontrat;
    }

    

    public function setTypedecontrat(?Typecontrat $typedecontrat): self
    {
        $this->typedecontrat = $typedecontrat;

        return $this;
    }

    public function __toString()
    {
        $this->datededebut;
        $this->datedefin;
        return $this;
         
    }



    
}
