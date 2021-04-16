<?php

namespace App\Entity;

use App\Repository\OccupationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OccupationRepository::class)
 */
class Occupation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $occupation;

    /**
     * @ORM\OneToMany(targetEntity=Person::class, mappedBy="occupation")
     */
    private $person;

    public function __construct()
    {
        $this->person = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * @return Collection|Person[]
     */
    public function getPerson(): Collection
    {
        return $this->person;
    }

    public function addPerson(Person $person): self
    {
        if (!$this->person->contains($person)) {
            $this->person[] = $person;
            $person->setOccupation($this);
        }

        return $this;
    }

    public function removePerson(Person $person): self
    {
        if ($this->person->removeElement($person)) {
            // set the owning side to null (unless already changed)
            if ($person->getOccupation() === $this) {
                $person->setOccupation(null);
            }
        }

        return $this;
    }
}
