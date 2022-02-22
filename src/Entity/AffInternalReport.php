<?php

namespace App\Entity;

use App\Repository\AffInternalReportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffInternalReportRepository::class)]
class AffInternalReport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $name;

    #[ORM\ManyToOne(targetEntity: AffReportTypes::class, inversedBy: 'internReports')]
    private $type;

    #[ORM\ManyToMany(targetEntity: AffField::class, mappedBy: 'internReports')]
    private $fields;

    #[ORM\ManyToOne(targetEntity: AffEditor::class, inversedBy: 'reports')]
    private $partner;

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
            $field->addInternReport($this);
        }

        return $this;
    }

    public function removeField(AffField $field): self
    {
        if ($this->fields->removeElement($field)) {
            $field->removeInternReport($this);
        }

        return $this;
    }

    public function getPartner(): ?AffEditor
    {
        return $this->partner;
    }

    public function setPartner(?AffEditor $partner): self
    {
        $this->partner = $partner;

        return $this;
    }
}
