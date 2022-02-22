<?php

namespace App\Entity;

use App\Repository\AffFieldRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffFieldRepository::class)]
class AffField
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $innerName;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $type;

    #[ORM\ManyToMany(targetEntity: AffReport::class, inversedBy: 'fields')]
    private $reports;

    #[ORM\ManyToMany(targetEntity: AffInternalReport::class, inversedBy: 'fields')]
    private $internReports;

    public function __construct()
    {
        $this->reports = new ArrayCollection();
        $this->internReports = new ArrayCollection();
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

    public function getInnerName(): ?string
    {
        return $this->innerName;
    }

    public function setInnerName(?string $innerName): self
    {
        $this->innerName = $innerName;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, AffReport>
     */
    public function getReports(): Collection
    {
        return $this->reports;
    }

    public function addReport(AffReport $report): self
    {
        if (!$this->reports->contains($report)) {
            $this->reports[] = $report;
        }

        return $this;
    }

    public function removeReport(AffReport $report): self
    {
        $this->reports->removeElement($report);

        return $this;
    }

    /**
     * @return Collection<int, AffInternalReport>
     */
    public function getInternReports(): Collection
    {
        return $this->internReports;
    }

    public function addInternReport(AffInternalReport $internReport): self
    {
        if (!$this->internReports->contains($internReport)) {
            $this->internReports[] = $internReport;
        }

        return $this;
    }

    public function removeInternReport(AffInternalReport $internReport): self
    {
        $this->internReports->removeElement($internReport);

        return $this;
    }
}
