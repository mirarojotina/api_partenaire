<?php

namespace App\Entity;

use App\Repository\AffReportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffReportRepository::class)]
class AffReport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $name;

    #[ORM\ManyToOne(targetEntity: AffPartner::class, inversedBy: 'reports')]
    #[ORM\JoinColumn(nullable: false)]
    private $partner;

    #[ORM\ManyToOne(targetEntity: AffReportTypes::class, inversedBy: 'reports')]
    #[ORM\JoinColumn(nullable: false)]
    private $type;

    #[ORM\ManyToMany(targetEntity: AffField::class, mappedBy: 'reports')]
    private $fields;

    public function __construct()
    {
        $this->fields = new ArrayCollection();
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

    public function getPartner(): ?AffPartner
    {
        return $this->partner;
    }

    public function setPartner(?AffPartner $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function getType(): ?AffReportTypes
    {
        return $this->type;
    }

    public function setType(?AffReportTypes $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, AffField>
     */
    public function getFields(): Collection
    {
        return $this->fields;
    }

    public function addField(AffField $field): self
    {
        if (!$this->fields->contains($field)) {
            $this->fields[] = $field;
            $field->addReport($this);
        }

        return $this;
    }

    public function removeField(AffField $field): self
    {
        if ($this->fields->removeElement($field)) {
            $field->removeReport($this);
        }

        return $this;
    }

}
