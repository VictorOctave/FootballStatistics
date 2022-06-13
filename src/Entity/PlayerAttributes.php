<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerAttributes
 *
 * @ORM\Table(name="Player_Attributes")
 * @ORM\Entity
 */
class PlayerAttributes
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
     * @ORM\Column(name="player_fifa_api_id", type="integer", nullable=true)
     */
    private $playerFifaApiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="player_api_id", type="integer", nullable=true)
     */
    private $playerApiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="text", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="overall_rating", type="integer", nullable=true)
     */
    private $overallRating;

    /**
     * @var int|null
     *
     * @ORM\Column(name="potential", type="integer", nullable=true)
     */
    private $potential;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preferred_foot", type="text", nullable=true)
     */
    private $preferredFoot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attacking_work_rate", type="text", nullable=true)
     */
    private $attackingWorkRate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defensive_work_rate", type="text", nullable=true)
     */
    private $defensiveWorkRate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="crossing", type="integer", nullable=true)
     */
    private $crossing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="finishing", type="integer", nullable=true)
     */
    private $finishing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heading_accuracy", type="integer", nullable=true)
     */
    private $headingAccuracy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="short_passing", type="integer", nullable=true)
     */
    private $shortPassing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="volleys", type="integer", nullable=true)
     */
    private $volleys;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dribbling", type="integer", nullable=true)
     */
    private $dribbling;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curve", type="integer", nullable=true)
     */
    private $curve;

    /**
     * @var int|null
     *
     * @ORM\Column(name="free_kick_accuracy", type="integer", nullable=true)
     */
    private $freeKickAccuracy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="long_passing", type="integer", nullable=true)
     */
    private $longPassing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ball_control", type="integer", nullable=true)
     */
    private $ballControl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="acceleration", type="integer", nullable=true)
     */
    private $acceleration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sprint_speed", type="integer", nullable=true)
     */
    private $sprintSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agility", type="integer", nullable=true)
     */
    private $agility;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reactions", type="integer", nullable=true)
     */
    private $reactions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="balance", type="integer", nullable=true)
     */
    private $balance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shot_power", type="integer", nullable=true)
     */
    private $shotPower;

    /**
     * @var int|null
     *
     * @ORM\Column(name="jumping", type="integer", nullable=true)
     */
    private $jumping;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stamina", type="integer", nullable=true)
     */
    private $stamina;

    /**
     * @var int|null
     *
     * @ORM\Column(name="strength", type="integer", nullable=true)
     */
    private $strength;

    /**
     * @var int|null
     *
     * @ORM\Column(name="long_shots", type="integer", nullable=true)
     */
    private $longShots;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aggression", type="integer", nullable=true)
     */
    private $aggression;

    /**
     * @var int|null
     *
     * @ORM\Column(name="interceptions", type="integer", nullable=true)
     */
    private $interceptions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="positioning", type="integer", nullable=true)
     */
    private $positioning;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vision", type="integer", nullable=true)
     */
    private $vision;

    /**
     * @var int|null
     *
     * @ORM\Column(name="penalties", type="integer", nullable=true)
     */
    private $penalties;

    /**
     * @var int|null
     *
     * @ORM\Column(name="marking", type="integer", nullable=true)
     */
    private $marking;

    /**
     * @var int|null
     *
     * @ORM\Column(name="standing_tackle", type="integer", nullable=true)
     */
    private $standingTackle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sliding_tackle", type="integer", nullable=true)
     */
    private $slidingTackle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gk_diving", type="integer", nullable=true)
     */
    private $gkDiving;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gk_handling", type="integer", nullable=true)
     */
    private $gkHandling;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gk_kicking", type="integer", nullable=true)
     */
    private $gkKicking;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gk_positioning", type="integer", nullable=true)
     */
    private $gkPositioning;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gk_reflexes", type="integer", nullable=true)
     */
    private $gkReflexes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerFifaApiId(): ?int
    {
        return $this->playerFifaApiId;
    }

    public function setPlayerFifaApiId(?int $playerFifaApiId): self
    {
        $this->playerFifaApiId = $playerFifaApiId;

        return $this;
    }

    public function getPlayerApiId(): ?int
    {
        return $this->playerApiId;
    }

    public function setPlayerApiId(?int $playerApiId): self
    {
        $this->playerApiId = $playerApiId;

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

    public function getOverallRating(): ?int
    {
        return $this->overallRating;
    }

    public function setOverallRating(?int $overallRating): self
    {
        $this->overallRating = $overallRating;

        return $this;
    }

    public function getPotential(): ?int
    {
        return $this->potential;
    }

    public function setPotential(?int $potential): self
    {
        $this->potential = $potential;

        return $this;
    }

    public function getPreferredFoot(): ?string
    {
        return $this->preferredFoot;
    }

    public function setPreferredFoot(?string $preferredFoot): self
    {
        $this->preferredFoot = $preferredFoot;

        return $this;
    }

    public function getAttackingWorkRate(): ?string
    {
        return $this->attackingWorkRate;
    }

    public function setAttackingWorkRate(?string $attackingWorkRate): self
    {
        $this->attackingWorkRate = $attackingWorkRate;

        return $this;
    }

    public function getDefensiveWorkRate(): ?string
    {
        return $this->defensiveWorkRate;
    }

    public function setDefensiveWorkRate(?string $defensiveWorkRate): self
    {
        $this->defensiveWorkRate = $defensiveWorkRate;

        return $this;
    }

    public function getCrossing(): ?int
    {
        return $this->crossing;
    }

    public function setCrossing(?int $crossing): self
    {
        $this->crossing = $crossing;

        return $this;
    }

    public function getFinishing(): ?int
    {
        return $this->finishing;
    }

    public function setFinishing(?int $finishing): self
    {
        $this->finishing = $finishing;

        return $this;
    }

    public function getHeadingAccuracy(): ?int
    {
        return $this->headingAccuracy;
    }

    public function setHeadingAccuracy(?int $headingAccuracy): self
    {
        $this->headingAccuracy = $headingAccuracy;

        return $this;
    }

    public function getShortPassing(): ?int
    {
        return $this->shortPassing;
    }

    public function setShortPassing(?int $shortPassing): self
    {
        $this->shortPassing = $shortPassing;

        return $this;
    }

    public function getVolleys(): ?int
    {
        return $this->volleys;
    }

    public function setVolleys(?int $volleys): self
    {
        $this->volleys = $volleys;

        return $this;
    }

    public function getDribbling(): ?int
    {
        return $this->dribbling;
    }

    public function setDribbling(?int $dribbling): self
    {
        $this->dribbling = $dribbling;

        return $this;
    }

    public function getCurve(): ?int
    {
        return $this->curve;
    }

    public function setCurve(?int $curve): self
    {
        $this->curve = $curve;

        return $this;
    }

    public function getFreeKickAccuracy(): ?int
    {
        return $this->freeKickAccuracy;
    }

    public function setFreeKickAccuracy(?int $freeKickAccuracy): self
    {
        $this->freeKickAccuracy = $freeKickAccuracy;

        return $this;
    }

    public function getLongPassing(): ?int
    {
        return $this->longPassing;
    }

    public function setLongPassing(?int $longPassing): self
    {
        $this->longPassing = $longPassing;

        return $this;
    }

    public function getBallControl(): ?int
    {
        return $this->ballControl;
    }

    public function setBallControl(?int $ballControl): self
    {
        $this->ballControl = $ballControl;

        return $this;
    }

    public function getAcceleration(): ?int
    {
        return $this->acceleration;
    }

    public function setAcceleration(?int $acceleration): self
    {
        $this->acceleration = $acceleration;

        return $this;
    }

    public function getSprintSpeed(): ?int
    {
        return $this->sprintSpeed;
    }

    public function setSprintSpeed(?int $sprintSpeed): self
    {
        $this->sprintSpeed = $sprintSpeed;

        return $this;
    }

    public function getAgility(): ?int
    {
        return $this->agility;
    }

    public function setAgility(?int $agility): self
    {
        $this->agility = $agility;

        return $this;
    }

    public function getReactions(): ?int
    {
        return $this->reactions;
    }

    public function setReactions(?int $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function getBalance(): ?int
    {
        return $this->balance;
    }

    public function setBalance(?int $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getShotPower(): ?int
    {
        return $this->shotPower;
    }

    public function setShotPower(?int $shotPower): self
    {
        $this->shotPower = $shotPower;

        return $this;
    }

    public function getJumping(): ?int
    {
        return $this->jumping;
    }

    public function setJumping(?int $jumping): self
    {
        $this->jumping = $jumping;

        return $this;
    }

    public function getStamina(): ?int
    {
        return $this->stamina;
    }

    public function setStamina(?int $stamina): self
    {
        $this->stamina = $stamina;

        return $this;
    }

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(?int $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getLongShots(): ?int
    {
        return $this->longShots;
    }

    public function setLongShots(?int $longShots): self
    {
        $this->longShots = $longShots;

        return $this;
    }

    public function getAggression(): ?int
    {
        return $this->aggression;
    }

    public function setAggression(?int $aggression): self
    {
        $this->aggression = $aggression;

        return $this;
    }

    public function getInterceptions(): ?int
    {
        return $this->interceptions;
    }

    public function setInterceptions(?int $interceptions): self
    {
        $this->interceptions = $interceptions;

        return $this;
    }

    public function getPositioning(): ?int
    {
        return $this->positioning;
    }

    public function setPositioning(?int $positioning): self
    {
        $this->positioning = $positioning;

        return $this;
    }

    public function getVision(): ?int
    {
        return $this->vision;
    }

    public function setVision(?int $vision): self
    {
        $this->vision = $vision;

        return $this;
    }

    public function getPenalties(): ?int
    {
        return $this->penalties;
    }

    public function setPenalties(?int $penalties): self
    {
        $this->penalties = $penalties;

        return $this;
    }

    public function getMarking(): ?int
    {
        return $this->marking;
    }

    public function setMarking(?int $marking): self
    {
        $this->marking = $marking;

        return $this;
    }

    public function getStandingTackle(): ?int
    {
        return $this->standingTackle;
    }

    public function setStandingTackle(?int $standingTackle): self
    {
        $this->standingTackle = $standingTackle;

        return $this;
    }

    public function getSlidingTackle(): ?int
    {
        return $this->slidingTackle;
    }

    public function setSlidingTackle(?int $slidingTackle): self
    {
        $this->slidingTackle = $slidingTackle;

        return $this;
    }

    public function getGkDiving(): ?int
    {
        return $this->gkDiving;
    }

    public function setGkDiving(?int $gkDiving): self
    {
        $this->gkDiving = $gkDiving;

        return $this;
    }

    public function getGkHandling(): ?int
    {
        return $this->gkHandling;
    }

    public function setGkHandling(?int $gkHandling): self
    {
        $this->gkHandling = $gkHandling;

        return $this;
    }

    public function getGkKicking(): ?int
    {
        return $this->gkKicking;
    }

    public function setGkKicking(?int $gkKicking): self
    {
        $this->gkKicking = $gkKicking;

        return $this;
    }

    public function getGkPositioning(): ?int
    {
        return $this->gkPositioning;
    }

    public function setGkPositioning(?int $gkPositioning): self
    {
        $this->gkPositioning = $gkPositioning;

        return $this;
    }

    public function getGkReflexes(): ?int
    {
        return $this->gkReflexes;
    }

    public function setGkReflexes(?int $gkReflexes): self
    {
        $this->gkReflexes = $gkReflexes;

        return $this;
    }
}
