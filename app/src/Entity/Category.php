<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="category")
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Item[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Item $categoryItem): self
    {
        if (!$this->items->contains($categoryItem)) {
            $this->items[] = $categoryItem;
            $categoryItem->setCategory($this);
        }

        return $this;
    }

    public function removeItem(Item $categoryItem): self
    {
        if ($this->items->removeElement($categoryItem)) {
            // set the owning side to null (unless already changed)
            if ($categoryItem->getCategory() === $this) {
                $categoryItem->setCategory(null);
            }
        }

        return $this;
    }

}
