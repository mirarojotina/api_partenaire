<?php

namespace App\Entity;

use App\Repository\AffEditorsDatasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffEditorsDatasRepository::class)]
class AffEditorsDatas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $uniq;

    #[ORM\Column(type: 'boolean')]
    private $valid;

    #[ORM\Column(type: 'boolean')]
    private $delivered;

    #[ORM\Column(type: 'boolean')]
    private $gainful;

    #[ORM\ManyToOne(targetEntity: AffEditor::class, inversedBy: 'datas')]
    private $editor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUniq(): ?bool
    {
        return $this->uniq;
    }

    public function setUniq(bool $uniq): self
    {
        $this->uniq = $uniq;

        return $this;
    }

    public function getValid(): ?bool
    {
        return $this->valid;
    }

    public function setValid(bool $valid): self
    {
        $this->valid = $valid;

        return $this;
    }

    public function getDelivered(): ?bool
    {
        return $this->delivered;
    }

    public function setDelivered(bool $delivered): self
    {
        $this->delivered = $delivered;

        return $this;
    }

    public function getGainful(): ?bool
    {
        return $this->gainful;
    }

    public function setGainful(bool $gainful): self
    {
        $this->gainful = $gainful;

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
