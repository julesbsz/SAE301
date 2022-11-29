<?php

namespace App\Entity;

use App\Repository\PlacesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlacesRepository::class)]
class Places
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\OneToMany(mappedBy: 'places', targetEntity: Events::class)]
    private Collection $event_id;

    public function __construct()
    {
        $this->event_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * @return Collection<int, Events>
     */
    public function getEventId(): Collection
    {
        return $this->event_id;
    }

    public function addEventId(Events $eventId): self
    {
        if (!$this->event_id->contains($eventId)) {
            $this->event_id->add($eventId);
            $eventId->setPlaces($this);
        }

        return $this;
    }

    public function removeEventId(Events $eventId): self
    {
        if ($this->event_id->removeElement($eventId)) {
            // set the owning side to null (unless already changed)
            if ($eventId->getPlaces() === $this) {
                $eventId->setPlaces(null);
            }
        }

        return $this;
    }
}
