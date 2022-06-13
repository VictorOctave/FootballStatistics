<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="Player")
 * @ORM\Entity
 */
class Player
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
     * @ORM\Column(name="player_api_id", type="integer", nullable=true)
     */
    private $playerApiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="player_name", type="text", nullable=true)
     */
    private $playerName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="player_fifa_api_id", type="integer", nullable=true)
     */
    private $playerFifaApiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birthday", type="text", nullable=true)
     */
    private $birthday;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var int|null
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    private $weight;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPlayerName(): ?string
    {
        return $this->playerName;
    }

    public function setPlayerName(?string $playerName): self
    {
        $this->playerName = $playerName;

        return $this;
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

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
