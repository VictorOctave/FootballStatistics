<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="Team")
 * @ORM\Entity
 */
class Team
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
     * @ORM\Column(name="team_api_id", type="integer", nullable=true)
     */
    private $teamApiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="team_fifa_api_id", type="integer", nullable=true)
     */
    private $teamFifaApiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="team_long_name", type="text", nullable=true)
     */
    private $teamLongName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="team_short_name", type="text", nullable=true)
     */
    private $teamShortName;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTeamFifaApiId(): ?int
    {
        return $this->teamFifaApiId;
    }

    public function setTeamFifaApiId(?int $teamFifaApiId): self
    {
        $this->teamFifaApiId = $teamFifaApiId;

        return $this;
    }

    public function getTeamLongName(): ?string
    {
        return $this->teamLongName;
    }

    public function setTeamLongName(?string $teamLongName): self
    {
        $this->teamLongName = $teamLongName;

        return $this;
    }

    public function getTeamShortName(): ?string
    {
        return $this->teamShortName;
    }

    public function setTeamShortName(?string $teamShortName): self
    {
        $this->teamShortName = $teamShortName;

        return $this;
    }
}
