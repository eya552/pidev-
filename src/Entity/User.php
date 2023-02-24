<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    #[Assert\Positive(message:"The value must be a positive number")]

    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\Email(message:"The eamil ' {{ value }} ' is not a valid email")]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    private ?string $email = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private ?string $FirestName = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private ?string $LastName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private ?string $image = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private ?string $Adress = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    #[Assert\Positive(message:"The value must be a positive number")]


    private ?int $tel = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]
    #[Assert\Date(message:"The date '{{ value }}' is not a valid date format (yyyy-mm-dd).")]

    private ?\DateTimeInterface $DateOfBirth = null;

    #[ORM\Column(type: Types::ARRAY)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private array $PetsListId = [];

    #[ORM\Column]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private ?int $IdContrat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Ce champs doit etre rempli")]

    private ?string $paimentMethod = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirestName(): ?string
    {
        return $this->FirestName;
    }

    public function setFirestName(string $FirestName): self
    {
        $this->FirestName = $FirestName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->DateOfBirth;
    }

    public function setDateOfBirth(\DateTimeInterface $DateOfBirth): self
    {
        $this->DateOfBirth = $DateOfBirth;

        return $this;
    }

    public function getPetsListId(): array
    {
        return $this->PetsListId;
    }

    public function setPetsListId(array $PetsListId): self
    {
        $this->PetsListId = $PetsListId;

        return $this;
    }

    public function getIdContrat(): ?int
    {
        return $this->IdContrat;
    }

    public function setIdContrat(int $IdContrat): self
    {
        $this->IdContrat = $IdContrat;

        return $this;
    }

    public function getPaimentMethod(): ?string
    {
        return $this->paimentMethod;
    }

    public function setPaimentMethod(string $paimentMethod): self
    {
        $this->paimentMethod = $paimentMethod;

        return $this;
    }
}
