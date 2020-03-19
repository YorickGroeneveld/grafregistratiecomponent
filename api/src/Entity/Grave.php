<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;

/**
 *  An entity representing an Grave.
 *
 * This entity represents an Grave for Graves
 *
 * @author Yorick Groeneveld, Wilco Louwerse <yorickgroeneveld@hotmail.com>
 * @author Wilco Louwerse <wilco@louwerse.com>
 * @ApiResource(
 *
 *     normalizationContext={"groups"={"read"}, "enable_max_depth"=true},
 *     denormalizationContext={"groups"={"write"}, "enable_max_depth"=true}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\GraveRepository")
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
     * @var GraveCover The Relation of this Grave to GraveCover
     *
     * @example e2984465-190a-4562-829e-a8cca81aa35d
     * @Groups({"write", "read"})
     * @MaxDepth(1)
     * @ORM\ManyToOne(targetEntity="App\Entity\GraveCover")
     */
    private $graveCoverId;

    /**
     * @var datetime The date this grave has been created
     * @Assert\NotNull
     * @example 19/01/2010
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @var datetime The date this grave has been edited
     *
     * @example 19/01/2020
     * @Groups({"write", "read"})
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
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string The cemetery of this Grave
     *
     * @example url/Zuiderbegraafplaats
     * @Assert\NotNull
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     */
    private $cemetery;

    /**
     * @var string The acquisition of this Grave
     *
     * @example url
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $acquisition;

    /**
     * @var string The grave reference of this Grave
     *
     * @example zb-01
     *
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $graveReference;

    /**
     * @var string The grave type of this Grave
     *
     * @example url/singlegrave
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $graveType;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGraveCoverId(): ?GraveCover
    {
        return $this->graveCoverId;
    }

    public function setGraveCoverId(?GraveCover $graveCoverId): self
    {
        $this->graveCoverId = $graveCoverId;

        return $this;
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

    public function getCemetery(): ?string
    {
        return $this->cemetery;
    }

    public function setCemetery(string $cemetery): self
    {
        $this->cemetery = $cemetery;

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

    public function getGraveReference(): ?string
    {
        return $this->graveReference;
    }

    public function setGraveReference(?string $graveReference): self
    {
        $this->graveReference = $graveReference;

        return $this;
    }

    public function getGraveType(): ?string
    {
        return $this->graveType;
    }

    public function setGraveType(?string $graveType): self
    {
        $this->graveType = $graveType;

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
}
