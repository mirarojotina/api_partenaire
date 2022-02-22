<?php

namespace App\Entity;

use App\Repository\AffReportTypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffReportTypesRepository::class)]
class AffReportTypes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $typename;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $funcIdentifier;

    #[ORM\Column(type: 'boolean')]
    private $internal;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: AffReport::class)]
    private $reports;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: AffInternalReport::class)]
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

    public function getTypename(): ?string
    {
        return $this->typename;
    }

    public function setTypename(?string $typename): self
    {
        $this->typename = $typename;

        return $this;
    }

    public function getFuncIdentifier(): ?string
    {
        return $this->funcIdentifier;
    }

    public function setFuncIdentifier(?string $funcIdentifier): self
    {
        $this->funcIdentifier = $funcIdentifier;

        return $this;
    }

    public function getInternal(): ?bool
    {
        return $this->internal;
    }

    public function setInternal(bool $internal): self
    {
        $this->internal = $internal;

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
            $report->setType($this);
        }

        return $this;
    }

    public function removeReport(AffReport $report): self
    {
        if ($this->reports->removeElement($report)) {
            // set the owning side to null (unless already changed)
            if ($report->getType() === $this) {
                $report->setType(null);
            }
        }

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
            $internReport->setType($this);
        }

        return $this;
    }

    public function removeInternReport(AffInternalReport $internReport): self
    {
        if ($this->internReports->removeElement($internReport)) {
            // set the owning side to null (unless already changed)
            if ($internReport->getType() === $this) {
                $internReport->setType(null);
            }
        }

        return $this;
    }
}
