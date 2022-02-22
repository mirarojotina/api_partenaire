<?php

namespace App\Entity;

use App\Repository\AffDeliveryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffDeliveryRepository::class)]
class AffDelivery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $url;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $func;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $quota;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $quotaRange;

    #[ORM\ManyToOne(targetEntity: AffEditor::class, inversedBy: 'deliveries')]
    private $editor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getFunc(): ?string
    {
        return $this->func;
    }

    public function setFunc(?string $func): self
    {
        $this->func = $func;

        return $this;
    }

    public function getQuota(): ?int
    {
        return $this->quota;
    }

    public function setQuota(?int $quota): self
    {
        $this->quota = $quota;

        return $this;
    }

    public function getQuotaRange(): ?string
    {
        return $this->quotaRange;
    }

    public function setQuotaRange(?string $quotaRange): self
    {
        $this->quotaRange = $quotaRange;

        return $this;
    }

    public function getEditor(): ?AffEditor
    {
        return $this->editor;
    }

    public function setEditor(?AffEditor $editor): self
    {
        $this->editor = $editor;

        return $this;
    }
}
