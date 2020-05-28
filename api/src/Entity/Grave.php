<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Validator\Constraints\DateTime;

use Gedmo\Mapping\Annotation as Gedmo;
/**
 *  An entity representing an Grave.
 *
 * This entity represents an Grave for Graves
 *
 * @author Yorick Groeneveld <yorickgroeneveld@hotmail.com>
 * @author Wilco B. Louwerse <wilco@louwerse.com>
 * @ApiResource(
 *
 *     normalizationContext={"groups"={"read"}, "enable_max_depth"=true},
 *     denormalizationContext={"groups"={"write"}, "enable_max_depth"=true}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\GraveRepository")
 *
 *
 * @ApiFilter(BooleanFilter::class)
 * @ApiFilter(OrderFilter::class)
 * @ApiFilter(DateFilter::class, strategy=DateFilter::EXCLUDE_NULL)
 * @ApiFilter(SearchFilter::class, properties={"cemetery.id":"exact"})
 */
class Grave
{
    /**
     * @var UuidInterface The UUID identifier of this object
     *
     * @example e2984465-190a-4562-829e-a8cca81aa35d
     *
     * @Groups({"read"})
     * @Assert\Uuid
     * @ORM\Id()
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @var Datetime The moment this entity was created
     *
     * @Groups({"read"})
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var Datetime The moment this entity last Modified
     *
     * @Groups({"read"})
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string The description of this Grave
     *
     * @example beneath a nice tree
     *
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read", "write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string The acquisition of this Grave
     *
     * @example url
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read", "write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $acquisition;

    /**
     * @var string The reference of this Grave
     *
     * @example zb-01
     *
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read", "write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var string The status of this Grave
     *
     * @example in use
     *
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string The Location of this Grave on a Cemetery
     *
     * @example url/locationA
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var int The position where a Deceased rests within the Grave
     *
     * @example 1
     *
     * @Groups({"read","write"})
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\PositiveOrZero
     */
    private $position;

    /**
     * @var ArrayCollection The GraveCovers that are part of this Grave
     *
     * @Groups({"read", "write"})
     * @MaxDepth(1)
     * @ORM\ManyToMany(targetEntity="App\Entity\GraveCover", inversedBy="graves")
     */
    private $graveCovers;

    /**
     * @var string The deceased resting in this Grave
     *
     * @example url/deceased1
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deceased;

    /**
     * @var Stakeholder The Stakeholder that is part of this Grave
     *
     * @Groups({"read", "write"})
     * @MaxDepth(1)
     * @ORM\ManyToOne(targetEntity="App\Entity\Stakeholder", inversedBy="graves")
     */
    private $stakeholder;

    /**
     * @var Cemetery The Cemetery that is part of this Grave
     *
     * @Groups({"read", "write"})
     * @MaxDepth(1)
     * @ORM\ManyToOne(targetEntity="App\Entity\Cemetery", inversedBy="graves")
     *
     */
    private $cemetery;

    /**
     * @var GraveType The grave type of this Grave
     *
     * @Groups({"read", "write"})
     * @MaxDepth(1)
     * @ORM\ManyToOne(targetEntity="App\Entity\GraveType", inversedBy="graves")
     */
    private $graveType;

    public function __construct()
    {
        $this->graveCovers = new ArrayCollection();
    }

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(?\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAcquisition(): ?string
    {
        return $this->acquisition;
    }

    public function setAcquisition(?string $acquisition): self
    {
        $this->acquisition = $acquisition;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return Collection|GraveCover[]
     */
    public function getGraveCovers(): Collection
    {
        return $this->graveCovers;
    }

    public function addGraveCover(GraveCover $graveCover): self
    {
        if (!$this->graveCovers->contains($graveCover)) {
            $this->graveCovers[] = $graveCover;
        }

        return $this;
    }

    public function removeGraveCover(GraveCover $graveCover): self
    {
        if ($this->graveCovers->contains($graveCover)) {
            $this->graveCovers->removeElement($graveCover);
        }

        return $this;
    }

    public function getDeceased(): ?string
    {
        return $this->deceased;
    }

    public function setDeceased(?string $deceased): self
    {
        $this->deceased = $deceased;

        return $this;
    }

    public function getStakeholder(): ?Stakeholder
    {
        return $this->stakeholder;
    }

    public function setStakeholder(?Stakeholder $stakeholder): self
    {
        $this->stakeholder = $stakeholder;

        return $this;
    }

    public function getCemetery(): ?Cemetery
    {
        return $this->cemetery;
    }

    public function setCemetery(?Cemetery $cemetery): self
    {
        $this->cemetery = $cemetery;

        return $this;
    }

    public function getGraveType(): ?GraveType
    {
        return $this->graveType;
    }

    public function setGraveType(?GraveType $graveType): self
    {
        $this->graveType = $graveType;

        return $this;
    }
}
