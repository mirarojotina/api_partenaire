<?php

namespace App\Entity;

use App\Repository\AffEditorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffEditorRepository::class)]
class AffEditor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affiliateId;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affiliateUserName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affiliatePassword;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $token;
    
    #[ORM\OneToMany(mappedBy: 'editor', targetEntity: AffChannel::class)]
    private $channels;

    #[ORM\OneToMany(mappedBy: 'partner', targetEntity: AffInternalReport::class)]
    private $reports;

    #[ORM\OneToMany(mappedBy: 'editor', targetEntity: AffEditorsDatas::class)]
    private $datas;

    #[ORM\OneToMany(mappedBy: 'editor', targetEntity: AffDelivery::class)]
    private $deliveries;

    public function __construct()
    {
        $this->reports = new ArrayCollection();
        $this->channels = new ArrayCollection();
        $this->datas = new ArrayCollection();
        $this->deliveries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAffiliateId(): ?string
    {
        return $this->affiliateId;
    }

    public function setAffiliateId(?string $affiliateId): self
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    public function getAffiliateUserName(): ?string
    {
        return $this->affiliateUserName;
    }

    public function setAffiliateUserName(?string $affiliateUserName): self
    {
        $this->affiliateUserName = $affiliateUserName;

        return $this;
    }

    public function getAffiliatePassword(): ?string
    {
        return $this->affiliatePassword;
    }

    public function setAffiliatePassword(?string $affiliatePassword): self
    {
        $this->affiliatePassword = $affiliatePassword;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }
   /**
     * @return Collection<int, AffChannel>
     */
    public function getChannels(): Collection
    {
        return $this->channels;
    }

    public function addChannel(AffChannel $channel): self
    {
        if (!$this->channels->contains($channel)) {
            $this->channels[] = $channel;
            $channel->setEditor($this);
        }

        return $this;
    }

    public function removeChannel(AffChannel $channel): self
    {
        if ($this->channels->removeElement($channel)) {
            // set the owning side to null (unless already changed)
            if ($channel->getEditor() === $this) {
                $channel->setEditor(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AffInternalReport>
     */
    public function getReports(): Collection
    {
        return $this->reports;
    }

    public function addReport(AffInternalReport $report): self
    {
        if (!$this->reports->contains($report)) {
            $this->reports[] = $report;
            $report->setPartner($this);
        }

        return $this;
    }

    public function removeReport(AffInternalReport $report): self
    {
        if ($this->reports->removeElement($report)) {
            // set the owning side to null (unless already changed)
            if ($report->getPartner() === $this) {
                $report->setPartner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AffEditorsDatas>
     */
    public function getDatas(): Collection
    {
        return $this->datas;
    }

    public function addData(AffEditorsDatas $data): self
    {
        if (!$this->datas->contains($data)) {
            $this->datas[] = $data;
            $data->setEditor($this);
        }

        return $this;
    }

    public function removeData(AffEditorsDatas $data): self
    {
        if ($this->datas->removeElement($data)) {
            // set the owning side to null (unless already changed)
            if ($data->getEditor() === $this) {
                $data->setEditor(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AffDelivery>
     */
    public function getDeliveries(): Collection
    {
        return $this->deliveries;
    }

    public function addDelivery(AffDelivery $delivery): self
    {
        if (!$this->deliveries->contains($delivery)) {
            $this->deliveries[] = $delivery;
            $delivery->setEditor($this);
        }

        return $this;
    }

    public function removeDelivery(AffDelivery $delivery): self
    {
        if ($this->deliveries->removeElement($delivery)) {
            // set the owning side to null (unless already changed)
            if ($delivery->getEditor() === $this) {
                $delivery->setEditor(null);
            }
        }

        return $this;
    }
}
