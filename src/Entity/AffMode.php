<?php

namespace App\Entity;

use App\Repository\AffModeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffModeRepository::class)]
class AffMode
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\ManyToMany(targetEntity: AffPartner::class, inversedBy: 'modes')]
    private $partners;

    public function __construct()
    {
        $this->partners = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, AffPartner>
     */
    public function getPartners(): Collection
    {
        return $this->partners;
    }

    public function addPartner(AffPartner $partner): self
    {
        if (!$this->partners->contains($partner)) {
            $this->partners[] = $partner;
        }

        return $this;
    }

    public function removePartner(AffPartner $partner): self
    {
        $this->partners->removeElement($partner);

        return $this;
    }
}
