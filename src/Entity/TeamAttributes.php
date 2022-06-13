<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamAttributes
 *
 * @ORM\Table(name="Team_Attributes")
 * @ORM\Entity
 */
class TeamAttributes
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="team_fifa_api_id", type="integer", nullable=true)
     */
    private $teamFifaApiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="team_api_id", type="integer", nullable=true)
     */
    private $teamApiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="text", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="buildUpPlaySpeed", type="integer", nullable=true)
     */
    private $buildupplayspeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="buildUpPlaySpeedClass", type="text", nullable=true)
     */
    private $buildupplayspeedclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="buildUpPlayDribbling", type="integer", nullable=true)
     */
    private $buildupplaydribbling;

    /**
     * @var string|null
     *
     * @ORM\Column(name="buildUpPlayDribblingClass", type="text", nullable=true)
     */
    private $buildupplaydribblingclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="buildUpPlayPassing", type="integer", nullable=true)
     */
    private $buildupplaypassing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="buildUpPlayPassingClass", type="text", nullable=true)
     */
    private $buildupplaypassingclass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="buildUpPlayPositioningClass", type="text", nullable=true)
     */
    private $buildupplaypositioningclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chanceCreationPassing", type="integer", nullable=true)
     */
    private $chancecreationpassing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chanceCreationPassingClass", type="text", nullable=true)
     */
    private $chancecreationpassingclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chanceCreationCrossing", type="integer", nullable=true)
     */
    private $chancecreationcrossing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chanceCreationCrossingClass", type="text", nullable=true)
     */
    private $chancecreationcrossingclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chanceCreationShooting", type="integer", nullable=true)
     */
    private $chancecreationshooting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chanceCreationShootingClass", type="text", nullable=true)
     */
    private $chancecreationshootingclass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chanceCreationPositioningClass", type="text", nullable=true)
     */
    private $chancecreationpositioningclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defencePressure", type="integer", nullable=true)
     */
    private $defencepressure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defencePressureClass", type="text", nullable=true)
     */
    private $defencepressureclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defenceAggression", type="integer", nullable=true)
     */
    private $defenceaggression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defenceAggressionClass", type="text", nullable=true)
     */
    private $defenceaggressionclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defenceTeamWidth", type="integer", nullable=true)
     */
    private $defenceteamwidth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defenceTeamWidthClass", type="text", nullable=true)
     */
    private $defenceteamwidthclass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defenceDefenderLineClass", type="text", nullable=true)
     */
    private $defencedefenderlineclass;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeamFifaApiId(): ?int
    {
        return $this->teamFifaApiId;
    }

    public function setTeamFifaApiId(?int $teamFifaApiId): self
    {
        $this->teamFifaApiId = $teamFifaApiId;

        return $this;
    }

    public function getTeamApiId(): ?int
    {
        return $this->teamApiId;
    }

    public function setTeamApiId(?int $teamApiId): self
    {
        $this->teamApiId = $teamApiId;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getBuildupplayspeed(): ?int
    {
        return $this->buildupplayspeed;
    }

    public function setBuildupplayspeed(?int $buildupplayspeed): self
    {
        $this->buildupplayspeed = $buildupplayspeed;

        return $this;
    }

    public function getBuildupplayspeedclass(): ?string
    {
        return $this->buildupplayspeedclass;
    }

    public function setBuildupplayspeedclass(?string $buildupplayspeedclass): self
    {
        $this->buildupplayspeedclass = $buildupplayspeedclass;

        return $this;
    }

    public function getBuildupplaydribbling(): ?int
    {
        return $this->buildupplaydribbling;
    }

    public function setBuildupplaydribbling(?int $buildupplaydribbling): self
    {
        $this->buildupplaydribbling = $buildupplaydribbling;

        return $this;
    }

    public function getBuildupplaydribblingclass(): ?string
    {
        return $this->buildupplaydribblingclass;
    }

    public function setBuildupplaydribblingclass(?string $buildupplaydribblingclass): self
    {
        $this->buildupplaydribblingclass = $buildupplaydribblingclass;

        return $this;
    }

    public function getBuildupplaypassing(): ?int
    {
        return $this->buildupplaypassing;
    }

    public function setBuildupplaypassing(?int $buildupplaypassing): self
    {
        $this->buildupplaypassing = $buildupplaypassing;

        return $this;
    }

    public function getBuildupplaypassingclass(): ?string
    {
        return $this->buildupplaypassingclass;
    }

    public function setBuildupplaypassingclass(?string $buildupplaypassingclass): self
    {
        $this->buildupplaypassingclass = $buildupplaypassingclass;

        return $this;
    }

    public function getBuildupplaypositioningclass(): ?string
    {
        return $this->buildupplaypositioningclass;
    }

    public function setBuildupplaypositioningclass(?string $buildupplaypositioningclass): self
    {
        $this->buildupplaypositioningclass = $buildupplaypositioningclass;

        return $this;
    }

    public function getChancecreationpassing(): ?int
    {
        return $this->chancecreationpassing;
    }

    public function setChancecreationpassing(?int $chancecreationpassing): self
    {
        $this->chancecreationpassing = $chancecreationpassing;

        return $this;
    }

    public function getChancecreationpassingclass(): ?string
    {
        return $this->chancecreationpassingclass;
    }

    public function setChancecreationpassingclass(?string $chancecreationpassingclass): self
    {
        $this->chancecreationpassingclass = $chancecreationpassingclass;

        return $this;
    }

    public function getChancecreationcrossing(): ?int
    {
        return $this->chancecreationcrossing;
    }

    public function setChancecreationcrossing(?int $chancecreationcrossing): self
    {
        $this->chancecreationcrossing = $chancecreationcrossing;

        return $this;
    }

    public function getChancecreationcrossingclass(): ?string
    {
        return $this->chancecreationcrossingclass;
    }

    public function setChancecreationcrossingclass(?string $chancecreationcrossingclass): self
    {
        $this->chancecreationcrossingclass = $chancecreationcrossingclass;

        return $this;
    }

    public function getChancecreationshooting(): ?int
    {
        return $this->chancecreationshooting;
    }

    public function setChancecreationshooting(?int $chancecreationshooting): self
    {
        $this->chancecreationshooting = $chancecreationshooting;

        return $this;
    }

    public function getChancecreationshootingclass(): ?string
    {
        return $this->chancecreationshootingclass;
    }

    public function setChancecreationshootingclass(?string $chancecreationshootingclass): self
    {
        $this->chancecreationshootingclass = $chancecreationshootingclass;

        return $this;
    }

    public function getChancecreationpositioningclass(): ?string
    {
        return $this->chancecreationpositioningclass;
    }

    public function setChancecreationpositioningclass(?string $chancecreationpositioningclass): self
    {
        $this->chancecreationpositioningclass = $chancecreationpositioningclass;

        return $this;
    }

    public function getDefencepressure(): ?int
    {
        return $this->defencepressure;
    }

    public function setDefencepressure(?int $defencepressure): self
    {
        $this->defencepressure = $defencepressure;

        return $this;
    }

    public function getDefencepressureclass(): ?string
    {
        return $this->defencepressureclass;
    }

    public function setDefencepressureclass(?string $defencepressureclass): self
    {
        $this->defencepressureclass = $defencepressureclass;

        return $this;
    }

    public function getDefenceaggression(): ?int
    {
        return $this->defenceaggression;
    }

    public function setDefenceaggression(?int $defenceaggression): self
    {
        $this->defenceaggression = $defenceaggression;

        return $this;
    }

    public function getDefenceaggressionclass(): ?string
    {
        return $this->defenceaggressionclass;
    }

    public function setDefenceaggressionclass(?string $defenceaggressionclass): self
    {
        $this->defenceaggressionclass = $defenceaggressionclass;

        return $this;
    }

    public function getDefenceteamwidth(): ?int
    {
        return $this->defenceteamwidth;
    }

    public function setDefenceteamwidth(?int $defenceteamwidth): self
    {
        $this->defenceteamwidth = $defenceteamwidth;

        return $this;
    }

    public function getDefenceteamwidthclass(): ?string
    {
        return $this->defenceteamwidthclass;
    }

    public function setDefenceteamwidthclass(?string $defenceteamwidthclass): self
    {
        $this->defenceteamwidthclass = $defenceteamwidthclass;

        return $this;
    }

    public function getDefencedefenderlineclass(): ?string
    {
        return $this->defencedefenderlineclass;
    }

    public function setDefencedefenderlineclass(?string $defencedefenderlineclass): self
    {
        $this->defencedefenderlineclass = $defencedefenderlineclass;

        return $this;
    }
}
