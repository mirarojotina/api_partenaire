<?php

namespace App\Entity;

use App\Repository\AffPartnerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffPartnerRepository::class)]
class AffPartner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affiliateId;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affiliateUserName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $affiliatePassword;

    #[ORM\Column(type: 'string', length: 255)]
    private $token;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'partners')]
    private $users;

    #[ORM\OneToMany(mappedBy: 'partner', targetEntity: AffReport::class, orphanRemoval: true)]
    private $reports;

    #[ORM\OneToMany(mappedBy: 'partner', targetEntity: AffChannel::class, orphanRemoval: true)]
    private $channels;

    #[ORM\ManyToMany(targetEntity: AffMode::class, mappedBy: 'partners')]
    private $modes;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->reports = new ArrayCollection();
        $this->channels = new ArrayCollection();
        $this->modes = new ArrayCollection();
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

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

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
            $report->setPartner($this);
        }

        return $this;
    }

    public function removeReport(AffReport $report): self
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
            $channel->setPartner($this);
        }

        return $this;
    }

    public function removeChannel(AffChannel $channel): self
    {
        if ($this->channels->removeElement($channel)) {
            // set the owning side to null (unless already changed)
            if ($channel->getPartner() === $this) {
                $channel->setPartner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AffMode>
     */
    public function getModes(): Collection
    {
        return $this->modes;
    }

    public function addMode(AffMode $mode): self
    {
        if (!$this->modes->contains($mode)) {
            $this->modes[] = $mode;
            $mode->addPartner($this);
        }

        return $this;
    }

    public function removeMode(AffMode $mode): self
    {
        if ($this->modes->removeElement($mode)) {
            $mode->removePartner($this);
        }

        return $this;
    }
}
