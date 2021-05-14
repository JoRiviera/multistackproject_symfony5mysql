<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $auctionStart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $auctionEnd;

    /**
     * @ORM\Column(type="integer")
     */
    private $startPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $currentPrice;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="items")
     */
    // @TODO Change Cantegory to OneToMany
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=PickUpPlace::class, inversedBy="item")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pickUpPlace;

    /**
     * @ORM\OneToMany(targetEntity=Bid::class, mappedBy="item")
     */
    private $bids;

    /**
     * filename, stored in public/uploads/items
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->bids = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuctionStart(): ?\DateTimeInterface
    {
        return $this->auctionStart;
    }

    public function setAuctionStart(\DateTimeInterface $auctionStart): self
    {
        $this->auctionStart = $auctionStart;

        return $this;
    }

    public function getAuctionEnd(): ?\DateTimeInterface
    {
        return $this->auctionEnd;
    }

    public function setAuctionEnd(\DateTimeInterface $auctionEnd): self
    {
        $this->auctionEnd = $auctionEnd;

        return $this;
    }

    public function getStartPrice(): ?int
    {
        return $this->startPrice;
    }

    public function setStartPrice(int $startPrice): self
    {
        $this->startPrice = $startPrice;

        return $this;
    }

    public function getCurrentPrice(): ?int
    {
        return $this->currentPrice;
    }

    public function setCurrentPrice(int $currentPrice): self
    {
        $this->currentPrice = $currentPrice;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->category->removeElement($category);

        return $this;
    }

    public function getPickUpPlace(): ?PickUpPlace
    {
        return $this->pickUpPlace;
    }

    public function setPickUpPlace(?PickUpPlace $pickUpPlace): self
    {
        $this->pickUpPlace = $pickUpPlace;

        return $this;
    }

    /**
     * @return Collection|Bid[]
     */
    public function getBids(): Collection
    {
        return $this->bids;
    }

    public function addBid(Bid $bid): self
    {
        if (!$this->bids->contains($bid)) {
            $this->bids[] = $bid;
            $bid->setItem($this);
        }

        return $this;
    }

    public function removeBid(Bid $bid): self
    {
        if ($this->bids->removeElement($bid)) {
            // set the owning side to null (unless already changed)
            if ($bid->getItem() === $this) {
                $bid->setItem(null);
            }
        }

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
