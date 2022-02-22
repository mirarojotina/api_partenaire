<?php

namespace App\Entity;

use App\Repository\AffChannelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffChannelRepository::class)]
class AffChannel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: AffPartner::class, inversedBy: 'channels')]
    #[ORM\JoinColumn(nullable: false)]
    private $partner;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affproId;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'date')]
    private $added;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $channel;

    #[ORM\ManyToOne(targetEntity: AffEditor::class, inversedBy: 'channels')]
    private $editor;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAffproId(): ?string
    {
        return $this->affproId;
    }

    public function setAffproId(?string $affproId): self
    {
        $this->affproId = $affproId;

        return $this;
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

    public function getAdded(): ?\DateTimeInterface
    {
        return $this->added;
    }

    public function setAdded(\DateTimeInterface $added): self
    {
        $this->added = $added;

        return $this;
    }

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

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
