<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 *  An entity representing an Grave.
 *
 * This entity represents an Grave for Graves
 *
 * @author Yorick Groeneveld <yorickgroeneveld@hotmail.com>
 * @author Wilco Louwerse <wilco@louwerse.com>
 * @ApiResource(
 *
 *     normalizationContext={"groups"={"read"}, "enable_max_depth"=true},
 *     denormalizationContext={"groups"={"write"}, "enable_max_depth"=true}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\StakeholderRepository")
 */
class Stakeholder
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
     * @var datetime The date this Stakeholder has been created
     * @Assert\NotNull
     * @Assert\Date
     * @example 2020-01-19T00:00:00+00:00
     * @Groups({"read", "write"})
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @var datetime The date this Stakeholder has been edited
     * @Assert\Date
     * @example 2020-01-19T00:00:00+00:00
     * @Groups({"read", "write"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string The contact of this Stakeholder
     *
     * @example url/contact1
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read", "write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact;

    /**
     * @var string The defined person of this Stakeholder
     *
     * @example url/ingeschrevenpersoon1
     * @Assert\Length(
     *     max = 255
     * )
     * @Groups({"read", "write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ingeschrevenpersoon;

    /**
     * @var ArrayCollection The graves that are part of this Stakeholder
     *
     * @Groups({"read", "write"})
     * @MaxDepth(1)
     * @ORM\OneToMany(targetEntity="App\Entity\Grave", mappedBy="stakeholder")
     */
    private $graves;

    public function __construct()
    {
        $this->graves = new ArrayCollection();
    }

    public function getId(): ?int
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

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getIngeschrevenpersoon(): ?string
    {
        return $this->ingeschrevenpersoon;
    }

    public function setIngeschrevenpersoon(?string $ingeschrevenpersoon): self
    {
        $this->ingeschrevenpersoon = $ingeschrevenpersoon;

        return $this;
    }

    /**
     * @return Collection|Grave[]
     */
    public function getGraves(): Collection
    {
        return $this->graves;
    }

    public function addGrave(Grave $grave): self
    {
        if (!$this->graves->contains($grave)) {
            $this->graves[] = $grave;
            $grave->setStakeholder($this);
        }

        return $this;
    }

    public function removeGrave(Grave $grave): self
    {
        if ($this->graves->contains($grave)) {
            $this->graves->removeElement($grave);
            // set the owning side to null (unless already changed)
            if ($grave->getStakeholder() === $this) {
                $grave->setStakeholder(null);
            }
        }

        return $this;
    }
}
