<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match
 *
 * @ORM\Table(name="Match")
 * @ORM\Entity
 */
class Match
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
     * @ORM\Column(name="country_id", type="integer", nullable=true)
     */
    private $countryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="league_id", type="integer", nullable=true)
     */
    private $leagueId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="season", type="text", nullable=true)
     */
    private $season;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stage", type="integer", nullable=true)
     */
    private $stage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="text", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="match_api_id", type="integer", nullable=true)
     */
    private $matchApiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_team_api_id", type="integer", nullable=true)
     */
    private $homeTeamApiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_team_api_id", type="integer", nullable=true)
     */
    private $awayTeamApiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_team_goal", type="integer", nullable=true)
     */
    private $homeTeamGoal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_team_goal", type="integer", nullable=true)
     */
    private $awayTeamGoal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X1", type="integer", nullable=true)
     */
    private $homePlayerX1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X2", type="integer", nullable=true)
     */
    private $homePlayerX2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X3", type="integer", nullable=true)
     */
    private $homePlayerX3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X4", type="integer", nullable=true)
     */
    private $homePlayerX4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X5", type="integer", nullable=true)
     */
    private $homePlayerX5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X6", type="integer", nullable=true)
     */
    private $homePlayerX6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X7", type="integer", nullable=true)
     */
    private $homePlayerX7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X8", type="integer", nullable=true)
     */
    private $homePlayerX8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X9", type="integer", nullable=true)
     */
    private $homePlayerX9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X10", type="integer", nullable=true)
     */
    private $homePlayerX10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_X11", type="integer", nullable=true)
     */
    private $homePlayerX11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X1", type="integer", nullable=true)
     */
    private $awayPlayerX1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X2", type="integer", nullable=true)
     */
    private $awayPlayerX2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X3", type="integer", nullable=true)
     */
    private $awayPlayerX3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X4", type="integer", nullable=true)
     */
    private $awayPlayerX4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X5", type="integer", nullable=true)
     */
    private $awayPlayerX5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X6", type="integer", nullable=true)
     */
    private $awayPlayerX6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X7", type="integer", nullable=true)
     */
    private $awayPlayerX7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X8", type="integer", nullable=true)
     */
    private $awayPlayerX8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X9", type="integer", nullable=true)
     */
    private $awayPlayerX9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X10", type="integer", nullable=true)
     */
    private $awayPlayerX10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_X11", type="integer", nullable=true)
     */
    private $awayPlayerX11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y1", type="integer", nullable=true)
     */
    private $homePlayerY1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y2", type="integer", nullable=true)
     */
    private $homePlayerY2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y3", type="integer", nullable=true)
     */
    private $homePlayerY3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y4", type="integer", nullable=true)
     */
    private $homePlayerY4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y5", type="integer", nullable=true)
     */
    private $homePlayerY5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y6", type="integer", nullable=true)
     */
    private $homePlayerY6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y7", type="integer", nullable=true)
     */
    private $homePlayerY7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y8", type="integer", nullable=true)
     */
    private $homePlayerY8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y9", type="integer", nullable=true)
     */
    private $homePlayerY9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y10", type="integer", nullable=true)
     */
    private $homePlayerY10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_Y11", type="integer", nullable=true)
     */
    private $homePlayerY11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y1", type="integer", nullable=true)
     */
    private $awayPlayerY1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y2", type="integer", nullable=true)
     */
    private $awayPlayerY2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y3", type="integer", nullable=true)
     */
    private $awayPlayerY3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y4", type="integer", nullable=true)
     */
    private $awayPlayerY4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y5", type="integer", nullable=true)
     */
    private $awayPlayerY5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y6", type="integer", nullable=true)
     */
    private $awayPlayerY6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y7", type="integer", nullable=true)
     */
    private $awayPlayerY7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y8", type="integer", nullable=true)
     */
    private $awayPlayerY8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y9", type="integer", nullable=true)
     */
    private $awayPlayerY9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y10", type="integer", nullable=true)
     */
    private $awayPlayerY10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_Y11", type="integer", nullable=true)
     */
    private $awayPlayerY11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_1", type="integer", nullable=true)
     */
    private $homePlayer1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_2", type="integer", nullable=true)
     */
    private $homePlayer2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_3", type="integer", nullable=true)
     */
    private $homePlayer3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_4", type="integer", nullable=true)
     */
    private $homePlayer4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_5", type="integer", nullable=true)
     */
    private $homePlayer5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_6", type="integer", nullable=true)
     */
    private $homePlayer6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_7", type="integer", nullable=true)
     */
    private $homePlayer7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_8", type="integer", nullable=true)
     */
    private $homePlayer8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_9", type="integer", nullable=true)
     */
    private $homePlayer9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_10", type="integer", nullable=true)
     */
    private $homePlayer10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="home_player_11", type="integer", nullable=true)
     */
    private $homePlayer11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_1", type="integer", nullable=true)
     */
    private $awayPlayer1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_2", type="integer", nullable=true)
     */
    private $awayPlayer2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_3", type="integer", nullable=true)
     */
    private $awayPlayer3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_4", type="integer", nullable=true)
     */
    private $awayPlayer4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_5", type="integer", nullable=true)
     */
    private $awayPlayer5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_6", type="integer", nullable=true)
     */
    private $awayPlayer6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_7", type="integer", nullable=true)
     */
    private $awayPlayer7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_8", type="integer", nullable=true)
     */
    private $awayPlayer8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_9", type="integer", nullable=true)
     */
    private $awayPlayer9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_10", type="integer", nullable=true)
     */
    private $awayPlayer10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="away_player_11", type="integer", nullable=true)
     */
    private $awayPlayer11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="goal", type="text", nullable=true)
     */
    private $goal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shoton", type="text", nullable=true)
     */
    private $shoton;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shotoff", type="text", nullable=true)
     */
    private $shotoff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="foulcommit", type="text", nullable=true)
     */
    private $foulcommit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="card", type="text", nullable=true)
     */
    private $card;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cross", type="text", nullable=true)
     */
    private $cross;

    /**
     * @var string|null
     *
     * @ORM\Column(name="corner", type="text", nullable=true)
     */
    private $corner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="possession", type="text", nullable=true)
     */
    private $possession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="B365H", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $b365h;

    /**
     * @var string|null
     *
     * @ORM\Column(name="B365D", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $b365d;

    /**
     * @var string|null
     *
     * @ORM\Column(name="B365A", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $b365a;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BWH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bwh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BWD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BWA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bwa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IWH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $iwh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IWD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $iwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IWA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $iwa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LBH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lbh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LBD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lbd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LBA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lba;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PSH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $psh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PSD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $psd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PSA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $psa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WHH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $whh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WHD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $whd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WHA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $wha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SJH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $sjh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SJD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $sjd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SJA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $sja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VCH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VCD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vcd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VCA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GBH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $gbh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GBD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $gbd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GBA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $gba;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BSH", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bsh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BSD", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bsd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BSA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bsa;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    /**
     * @param int|null $countryId
     */
    public function setCountryId(?int $countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int|null
     */
    public function getLeagueId(): ?int
    {
        return $this->leagueId;
    }

    /**
     * @param int|null $leagueId
     */
    public function setLeagueId(?int $leagueId): void
    {
        $this->leagueId = $leagueId;
    }

    /**
     * @return string|null
     */
    public function getSeason(): ?string
    {
        return $this->season;
    }

    /**
     * @param string|null $season
     */
    public function setSeason(?string $season): void
    {
        $this->season = $season;
    }

    /**
     * @return int|null
     */
    public function getStage(): ?int
    {
        return $this->stage;
    }

    /**
     * @param int|null $stage
     */
    public function setStage(?int $stage): void
    {
        $this->stage = $stage;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int|null
     */
    public function getMatchApiId(): ?int
    {
        return $this->matchApiId;
    }

    /**
     * @param int|null $matchApiId
     */
    public function setMatchApiId(?int $matchApiId): void
    {
        $this->matchApiId = $matchApiId;
    }

    /**
     * @return int|null
     */
    public function getHomeTeamApiId(): ?int
    {
        return $this->homeTeamApiId;
    }

    /**
     * @param int|null $homeTeamApiId
     */
    public function setHomeTeamApiId(?int $homeTeamApiId): void
    {
        $this->homeTeamApiId = $homeTeamApiId;
    }

    /**
     * @return int|null
     */
    public function getAwayTeamApiId(): ?int
    {
        return $this->awayTeamApiId;
    }

    /**
     * @param int|null $awayTeamApiId
     */
    public function setAwayTeamApiId(?int $awayTeamApiId): void
    {
        $this->awayTeamApiId = $awayTeamApiId;
    }

    /**
     * @return int|null
     */
    public function getHomeTeamGoal(): ?int
    {
        return $this->homeTeamGoal;
    }

    /**
     * @param int|null $homeTeamGoal
     */
    public function setHomeTeamGoal(?int $homeTeamGoal): void
    {
        $this->homeTeamGoal = $homeTeamGoal;
    }

    /**
     * @return int|null
     */
    public function getAwayTeamGoal(): ?int
    {
        return $this->awayTeamGoal;
    }

    /**
     * @param int|null $awayTeamGoal
     */
    public function setAwayTeamGoal(?int $awayTeamGoal): void
    {
        $this->awayTeamGoal = $awayTeamGoal;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX1(): ?int
    {
        return $this->homePlayerX1;
    }

    /**
     * @param int|null $homePlayerX1
     */
    public function setHomePlayerX1(?int $homePlayerX1): void
    {
        $this->homePlayerX1 = $homePlayerX1;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX2(): ?int
    {
        return $this->homePlayerX2;
    }

    /**
     * @param int|null $homePlayerX2
     */
    public function setHomePlayerX2(?int $homePlayerX2): void
    {
        $this->homePlayerX2 = $homePlayerX2;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX3(): ?int
    {
        return $this->homePlayerX3;
    }

    /**
     * @param int|null $homePlayerX3
     */
    public function setHomePlayerX3(?int $homePlayerX3): void
    {
        $this->homePlayerX3 = $homePlayerX3;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX4(): ?int
    {
        return $this->homePlayerX4;
    }

    /**
     * @param int|null $homePlayerX4
     */
    public function setHomePlayerX4(?int $homePlayerX4): void
    {
        $this->homePlayerX4 = $homePlayerX4;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX5(): ?int
    {
        return $this->homePlayerX5;
    }

    /**
     * @param int|null $homePlayerX5
     */
    public function setHomePlayerX5(?int $homePlayerX5): void
    {
        $this->homePlayerX5 = $homePlayerX5;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX6(): ?int
    {
        return $this->homePlayerX6;
    }

    /**
     * @param int|null $homePlayerX6
     */
    public function setHomePlayerX6(?int $homePlayerX6): void
    {
        $this->homePlayerX6 = $homePlayerX6;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX7(): ?int
    {
        return $this->homePlayerX7;
    }

    /**
     * @param int|null $homePlayerX7
     */
    public function setHomePlayerX7(?int $homePlayerX7): void
    {
        $this->homePlayerX7 = $homePlayerX7;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX8(): ?int
    {
        return $this->homePlayerX8;
    }

    /**
     * @param int|null $homePlayerX8
     */
    public function setHomePlayerX8(?int $homePlayerX8): void
    {
        $this->homePlayerX8 = $homePlayerX8;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX9(): ?int
    {
        return $this->homePlayerX9;
    }

    /**
     * @param int|null $homePlayerX9
     */
    public function setHomePlayerX9(?int $homePlayerX9): void
    {
        $this->homePlayerX9 = $homePlayerX9;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX10(): ?int
    {
        return $this->homePlayerX10;
    }

    /**
     * @param int|null $homePlayerX10
     */
    public function setHomePlayerX10(?int $homePlayerX10): void
    {
        $this->homePlayerX10 = $homePlayerX10;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerX11(): ?int
    {
        return $this->homePlayerX11;
    }

    /**
     * @param int|null $homePlayerX11
     */
    public function setHomePlayerX11(?int $homePlayerX11): void
    {
        $this->homePlayerX11 = $homePlayerX11;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX1(): ?int
    {
        return $this->awayPlayerX1;
    }

    /**
     * @param int|null $awayPlayerX1
     */
    public function setAwayPlayerX1(?int $awayPlayerX1): void
    {
        $this->awayPlayerX1 = $awayPlayerX1;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX2(): ?int
    {
        return $this->awayPlayerX2;
    }

    /**
     * @param int|null $awayPlayerX2
     */
    public function setAwayPlayerX2(?int $awayPlayerX2): void
    {
        $this->awayPlayerX2 = $awayPlayerX2;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX3(): ?int
    {
        return $this->awayPlayerX3;
    }

    /**
     * @param int|null $awayPlayerX3
     */
    public function setAwayPlayerX3(?int $awayPlayerX3): void
    {
        $this->awayPlayerX3 = $awayPlayerX3;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX4(): ?int
    {
        return $this->awayPlayerX4;
    }

    /**
     * @param int|null $awayPlayerX4
     */
    public function setAwayPlayerX4(?int $awayPlayerX4): void
    {
        $this->awayPlayerX4 = $awayPlayerX4;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX5(): ?int
    {
        return $this->awayPlayerX5;
    }

    /**
     * @param int|null $awayPlayerX5
     */
    public function setAwayPlayerX5(?int $awayPlayerX5): void
    {
        $this->awayPlayerX5 = $awayPlayerX5;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX6(): ?int
    {
        return $this->awayPlayerX6;
    }

    /**
     * @param int|null $awayPlayerX6
     */
    public function setAwayPlayerX6(?int $awayPlayerX6): void
    {
        $this->awayPlayerX6 = $awayPlayerX6;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX7(): ?int
    {
        return $this->awayPlayerX7;
    }

    /**
     * @param int|null $awayPlayerX7
     */
    public function setAwayPlayerX7(?int $awayPlayerX7): void
    {
        $this->awayPlayerX7 = $awayPlayerX7;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX8(): ?int
    {
        return $this->awayPlayerX8;
    }

    /**
     * @param int|null $awayPlayerX8
     */
    public function setAwayPlayerX8(?int $awayPlayerX8): void
    {
        $this->awayPlayerX8 = $awayPlayerX8;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX9(): ?int
    {
        return $this->awayPlayerX9;
    }

    /**
     * @param int|null $awayPlayerX9
     */
    public function setAwayPlayerX9(?int $awayPlayerX9): void
    {
        $this->awayPlayerX9 = $awayPlayerX9;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX10(): ?int
    {
        return $this->awayPlayerX10;
    }

    /**
     * @param int|null $awayPlayerX10
     */
    public function setAwayPlayerX10(?int $awayPlayerX10): void
    {
        $this->awayPlayerX10 = $awayPlayerX10;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerX11(): ?int
    {
        return $this->awayPlayerX11;
    }

    /**
     * @param int|null $awayPlayerX11
     */
    public function setAwayPlayerX11(?int $awayPlayerX11): void
    {
        $this->awayPlayerX11 = $awayPlayerX11;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY1(): ?int
    {
        return $this->homePlayerY1;
    }

    /**
     * @param int|null $homePlayerY1
     */
    public function setHomePlayerY1(?int $homePlayerY1): void
    {
        $this->homePlayerY1 = $homePlayerY1;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY2(): ?int
    {
        return $this->homePlayerY2;
    }

    /**
     * @param int|null $homePlayerY2
     */
    public function setHomePlayerY2(?int $homePlayerY2): void
    {
        $this->homePlayerY2 = $homePlayerY2;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY3(): ?int
    {
        return $this->homePlayerY3;
    }

    /**
     * @param int|null $homePlayerY3
     */
    public function setHomePlayerY3(?int $homePlayerY3): void
    {
        $this->homePlayerY3 = $homePlayerY3;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY4(): ?int
    {
        return $this->homePlayerY4;
    }

    /**
     * @param int|null $homePlayerY4
     */
    public function setHomePlayerY4(?int $homePlayerY4): void
    {
        $this->homePlayerY4 = $homePlayerY4;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY5(): ?int
    {
        return $this->homePlayerY5;
    }

    /**
     * @param int|null $homePlayerY5
     */
    public function setHomePlayerY5(?int $homePlayerY5): void
    {
        $this->homePlayerY5 = $homePlayerY5;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY6(): ?int
    {
        return $this->homePlayerY6;
    }

    /**
     * @param int|null $homePlayerY6
     */
    public function setHomePlayerY6(?int $homePlayerY6): void
    {
        $this->homePlayerY6 = $homePlayerY6;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY7(): ?int
    {
        return $this->homePlayerY7;
    }

    /**
     * @param int|null $homePlayerY7
     */
    public function setHomePlayerY7(?int $homePlayerY7): void
    {
        $this->homePlayerY7 = $homePlayerY7;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY8(): ?int
    {
        return $this->homePlayerY8;
    }

    /**
     * @param int|null $homePlayerY8
     */
    public function setHomePlayerY8(?int $homePlayerY8): void
    {
        $this->homePlayerY8 = $homePlayerY8;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY9(): ?int
    {
        return $this->homePlayerY9;
    }

    /**
     * @param int|null $homePlayerY9
     */
    public function setHomePlayerY9(?int $homePlayerY9): void
    {
        $this->homePlayerY9 = $homePlayerY9;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY10(): ?int
    {
        return $this->homePlayerY10;
    }

    /**
     * @param int|null $homePlayerY10
     */
    public function setHomePlayerY10(?int $homePlayerY10): void
    {
        $this->homePlayerY10 = $homePlayerY10;
    }

    /**
     * @return int|null
     */
    public function getHomePlayerY11(): ?int
    {
        return $this->homePlayerY11;
    }

    /**
     * @param int|null $homePlayerY11
     */
    public function setHomePlayerY11(?int $homePlayerY11): void
    {
        $this->homePlayerY11 = $homePlayerY11;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY1(): ?int
    {
        return $this->awayPlayerY1;
    }

    /**
     * @param int|null $awayPlayerY1
     */
    public function setAwayPlayerY1(?int $awayPlayerY1): void
    {
        $this->awayPlayerY1 = $awayPlayerY1;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY2(): ?int
    {
        return $this->awayPlayerY2;
    }

    /**
     * @param int|null $awayPlayerY2
     */
    public function setAwayPlayerY2(?int $awayPlayerY2): void
    {
        $this->awayPlayerY2 = $awayPlayerY2;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY3(): ?int
    {
        return $this->awayPlayerY3;
    }

    /**
     * @param int|null $awayPlayerY3
     */
    public function setAwayPlayerY3(?int $awayPlayerY3): void
    {
        $this->awayPlayerY3 = $awayPlayerY3;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY4(): ?int
    {
        return $this->awayPlayerY4;
    }

    /**
     * @param int|null $awayPlayerY4
     */
    public function setAwayPlayerY4(?int $awayPlayerY4): void
    {
        $this->awayPlayerY4 = $awayPlayerY4;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY5(): ?int
    {
        return $this->awayPlayerY5;
    }

    /**
     * @param int|null $awayPlayerY5
     */
    public function setAwayPlayerY5(?int $awayPlayerY5): void
    {
        $this->awayPlayerY5 = $awayPlayerY5;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY6(): ?int
    {
        return $this->awayPlayerY6;
    }

    /**
     * @param int|null $awayPlayerY6
     */
    public function setAwayPlayerY6(?int $awayPlayerY6): void
    {
        $this->awayPlayerY6 = $awayPlayerY6;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY7(): ?int
    {
        return $this->awayPlayerY7;
    }

    /**
     * @param int|null $awayPlayerY7
     */
    public function setAwayPlayerY7(?int $awayPlayerY7): void
    {
        $this->awayPlayerY7 = $awayPlayerY7;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY8(): ?int
    {
        return $this->awayPlayerY8;
    }

    /**
     * @param int|null $awayPlayerY8
     */
    public function setAwayPlayerY8(?int $awayPlayerY8): void
    {
        $this->awayPlayerY8 = $awayPlayerY8;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY9(): ?int
    {
        return $this->awayPlayerY9;
    }

    /**
     * @param int|null $awayPlayerY9
     */
    public function setAwayPlayerY9(?int $awayPlayerY9): void
    {
        $this->awayPlayerY9 = $awayPlayerY9;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY10(): ?int
    {
        return $this->awayPlayerY10;
    }

    /**
     * @param int|null $awayPlayerY10
     */
    public function setAwayPlayerY10(?int $awayPlayerY10): void
    {
        $this->awayPlayerY10 = $awayPlayerY10;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayerY11(): ?int
    {
        return $this->awayPlayerY11;
    }

    /**
     * @param int|null $awayPlayerY11
     */
    public function setAwayPlayerY11(?int $awayPlayerY11): void
    {
        $this->awayPlayerY11 = $awayPlayerY11;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer1(): ?int
    {
        return $this->homePlayer1;
    }

    /**
     * @param int|null $homePlayer1
     */
    public function setHomePlayer1(?int $homePlayer1): void
    {
        $this->homePlayer1 = $homePlayer1;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer2(): ?int
    {
        return $this->homePlayer2;
    }

    /**
     * @param int|null $homePlayer2
     */
    public function setHomePlayer2(?int $homePlayer2): void
    {
        $this->homePlayer2 = $homePlayer2;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer3(): ?int
    {
        return $this->homePlayer3;
    }

    /**
     * @param int|null $homePlayer3
     */
    public function setHomePlayer3(?int $homePlayer3): void
    {
        $this->homePlayer3 = $homePlayer3;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer4(): ?int
    {
        return $this->homePlayer4;
    }

    /**
     * @param int|null $homePlayer4
     */
    public function setHomePlayer4(?int $homePlayer4): void
    {
        $this->homePlayer4 = $homePlayer4;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer5(): ?int
    {
        return $this->homePlayer5;
    }

    /**
     * @param int|null $homePlayer5
     */
    public function setHomePlayer5(?int $homePlayer5): void
    {
        $this->homePlayer5 = $homePlayer5;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer6(): ?int
    {
        return $this->homePlayer6;
    }

    /**
     * @param int|null $homePlayer6
     */
    public function setHomePlayer6(?int $homePlayer6): void
    {
        $this->homePlayer6 = $homePlayer6;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer7(): ?int
    {
        return $this->homePlayer7;
    }

    /**
     * @param int|null $homePlayer7
     */
    public function setHomePlayer7(?int $homePlayer7): void
    {
        $this->homePlayer7 = $homePlayer7;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer8(): ?int
    {
        return $this->homePlayer8;
    }

    /**
     * @param int|null $homePlayer8
     */
    public function setHomePlayer8(?int $homePlayer8): void
    {
        $this->homePlayer8 = $homePlayer8;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer9(): ?int
    {
        return $this->homePlayer9;
    }

    /**
     * @param int|null $homePlayer9
     */
    public function setHomePlayer9(?int $homePlayer9): void
    {
        $this->homePlayer9 = $homePlayer9;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer10(): ?int
    {
        return $this->homePlayer10;
    }

    /**
     * @param int|null $homePlayer10
     */
    public function setHomePlayer10(?int $homePlayer10): void
    {
        $this->homePlayer10 = $homePlayer10;
    }

    /**
     * @return int|null
     */
    public function getHomePlayer11(): ?int
    {
        return $this->homePlayer11;
    }

    /**
     * @param int|null $homePlayer11
     */
    public function setHomePlayer11(?int $homePlayer11): void
    {
        $this->homePlayer11 = $homePlayer11;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer1(): ?int
    {
        return $this->awayPlayer1;
    }

    /**
     * @param int|null $awayPlayer1
     */
    public function setAwayPlayer1(?int $awayPlayer1): void
    {
        $this->awayPlayer1 = $awayPlayer1;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer2(): ?int
    {
        return $this->awayPlayer2;
    }

    /**
     * @param int|null $awayPlayer2
     */
    public function setAwayPlayer2(?int $awayPlayer2): void
    {
        $this->awayPlayer2 = $awayPlayer2;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer3(): ?int
    {
        return $this->awayPlayer3;
    }

    /**
     * @param int|null $awayPlayer3
     */
    public function setAwayPlayer3(?int $awayPlayer3): void
    {
        $this->awayPlayer3 = $awayPlayer3;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer4(): ?int
    {
        return $this->awayPlayer4;
    }

    /**
     * @param int|null $awayPlayer4
     */
    public function setAwayPlayer4(?int $awayPlayer4): void
    {
        $this->awayPlayer4 = $awayPlayer4;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer5(): ?int
    {
        return $this->awayPlayer5;
    }

    /**
     * @param int|null $awayPlayer5
     */
    public function setAwayPlayer5(?int $awayPlayer5): void
    {
        $this->awayPlayer5 = $awayPlayer5;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer6(): ?int
    {
        return $this->awayPlayer6;
    }

    /**
     * @param int|null $awayPlayer6
     */
    public function setAwayPlayer6(?int $awayPlayer6): void
    {
        $this->awayPlayer6 = $awayPlayer6;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer7(): ?int
    {
        return $this->awayPlayer7;
    }

    /**
     * @param int|null $awayPlayer7
     */
    public function setAwayPlayer7(?int $awayPlayer7): void
    {
        $this->awayPlayer7 = $awayPlayer7;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer8(): ?int
    {
        return $this->awayPlayer8;
    }

    /**
     * @param int|null $awayPlayer8
     */
    public function setAwayPlayer8(?int $awayPlayer8): void
    {
        $this->awayPlayer8 = $awayPlayer8;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer9(): ?int
    {
        return $this->awayPlayer9;
    }

    /**
     * @param int|null $awayPlayer9
     */
    public function setAwayPlayer9(?int $awayPlayer9): void
    {
        $this->awayPlayer9 = $awayPlayer9;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer10(): ?int
    {
        return $this->awayPlayer10;
    }

    /**
     * @param int|null $awayPlayer10
     */
    public function setAwayPlayer10(?int $awayPlayer10): void
    {
        $this->awayPlayer10 = $awayPlayer10;
    }

    /**
     * @return int|null
     */
    public function getAwayPlayer11(): ?int
    {
        return $this->awayPlayer11;
    }

    /**
     * @param int|null $awayPlayer11
     */
    public function setAwayPlayer11(?int $awayPlayer11): void
    {
        $this->awayPlayer11 = $awayPlayer11;
    }

    /**
     * @return string|null
     */
    public function getGoal(): ?string
    {
        return $this->goal;
    }

    /**
     * @param string|null $goal
     */
    public function setGoal(?string $goal): void
    {
        $this->goal = $goal;
    }

    /**
     * @return string|null
     */
    public function getShoton(): ?string
    {
        return $this->shoton;
    }

    /**
     * @param string|null $shoton
     */
    public function setShoton(?string $shoton): void
    {
        $this->shoton = $shoton;
    }

    /**
     * @return string|null
     */
    public function getShotoff(): ?string
    {
        return $this->shotoff;
    }

    /**
     * @param string|null $shotoff
     */
    public function setShotoff(?string $shotoff): void
    {
        $this->shotoff = $shotoff;
    }

    /**
     * @return string|null
     */
    public function getFoulcommit(): ?string
    {
        return $this->foulcommit;
    }

    /**
     * @param string|null $foulcommit
     */
    public function setFoulcommit(?string $foulcommit): void
    {
        $this->foulcommit = $foulcommit;
    }

    /**
     * @return string|null
     */
    public function getCard(): ?string
    {
        return $this->card;
    }

    /**
     * @param string|null $card
     */
    public function setCard(?string $card): void
    {
        $this->card = $card;
    }

    /**
     * @return string|null
     */
    public function getCross(): ?string
    {
        return $this->cross;
    }

    /**
     * @param string|null $cross
     */
    public function setCross(?string $cross): void
    {
        $this->cross = $cross;
    }

    /**
     * @return string|null
     */
    public function getCorner(): ?string
    {
        return $this->corner;
    }

    /**
     * @param string|null $corner
     */
    public function setCorner(?string $corner): void
    {
        $this->corner = $corner;
    }

    /**
     * @return string|null
     */
    public function getPossession(): ?string
    {
        return $this->possession;
    }

    /**
     * @param string|null $possession
     */
    public function setPossession(?string $possession): void
    {
        $this->possession = $possession;
    }

    /**
     * @return string|null
     */
    public function getB365h(): ?string
    {
        return $this->b365h;
    }

    /**
     * @param string|null $b365h
     */
    public function setB365h(?string $b365h): void
    {
        $this->b365h = $b365h;
    }

    /**
     * @return string|null
     */
    public function getB365d(): ?string
    {
        return $this->b365d;
    }

    /**
     * @param string|null $b365d
     */
    public function setB365d(?string $b365d): void
    {
        $this->b365d = $b365d;
    }

    /**
     * @return string|null
     */
    public function getB365a(): ?string
    {
        return $this->b365a;
    }

    /**
     * @param string|null $b365a
     */
    public function setB365a(?string $b365a): void
    {
        $this->b365a = $b365a;
    }

    /**
     * @return string|null
     */
    public function getBwh(): ?string
    {
        return $this->bwh;
    }

    /**
     * @param string|null $bwh
     */
    public function setBwh(?string $bwh): void
    {
        $this->bwh = $bwh;
    }

    /**
     * @return string|null
     */
    public function getBwd(): ?string
    {
        return $this->bwd;
    }

    /**
     * @param string|null $bwd
     */
    public function setBwd(?string $bwd): void
    {
        $this->bwd = $bwd;
    }

    /**
     * @return string|null
     */
    public function getBwa(): ?string
    {
        return $this->bwa;
    }

    /**
     * @param string|null $bwa
     */
    public function setBwa(?string $bwa): void
    {
        $this->bwa = $bwa;
    }

    /**
     * @return string|null
     */
    public function getIwh(): ?string
    {
        return $this->iwh;
    }

    /**
     * @param string|null $iwh
     */
    public function setIwh(?string $iwh): void
    {
        $this->iwh = $iwh;
    }

    /**
     * @return string|null
     */
    public function getIwd(): ?string
    {
        return $this->iwd;
    }

    /**
     * @param string|null $iwd
     */
    public function setIwd(?string $iwd): void
    {
        $this->iwd = $iwd;
    }

    /**
     * @return string|null
     */
    public function getIwa(): ?string
    {
        return $this->iwa;
    }

    /**
     * @param string|null $iwa
     */
    public function setIwa(?string $iwa): void
    {
        $this->iwa = $iwa;
    }

    /**
     * @return string|null
     */
    public function getLbh(): ?string
    {
        return $this->lbh;
    }

    /**
     * @param string|null $lbh
     */
    public function setLbh(?string $lbh): void
    {
        $this->lbh = $lbh;
    }

    /**
     * @return string|null
     */
    public function getLbd(): ?string
    {
        return $this->lbd;
    }

    /**
     * @param string|null $lbd
     */
    public function setLbd(?string $lbd): void
    {
        $this->lbd = $lbd;
    }

    /**
     * @return string|null
     */
    public function getLba(): ?string
    {
        return $this->lba;
    }

    /**
     * @param string|null $lba
     */
    public function setLba(?string $lba): void
    {
        $this->lba = $lba;
    }

    /**
     * @return string|null
     */
    public function getPsh(): ?string
    {
        return $this->psh;
    }

    /**
     * @param string|null $psh
     */
    public function setPsh(?string $psh): void
    {
        $this->psh = $psh;
    }

    /**
     * @return string|null
     */
    public function getPsd(): ?string
    {
        return $this->psd;
    }

    /**
     * @param string|null $psd
     */
    public function setPsd(?string $psd): void
    {
        $this->psd = $psd;
    }

    /**
     * @return string|null
     */
    public function getPsa(): ?string
    {
        return $this->psa;
    }

    /**
     * @param string|null $psa
     */
    public function setPsa(?string $psa): void
    {
        $this->psa = $psa;
    }

    /**
     * @return string|null
     */
    public function getWhh(): ?string
    {
        return $this->whh;
    }

    /**
     * @param string|null $whh
     */
    public function setWhh(?string $whh): void
    {
        $this->whh = $whh;
    }

    /**
     * @return string|null
     */
    public function getWhd(): ?string
    {
        return $this->whd;
    }

    /**
     * @param string|null $whd
     */
    public function setWhd(?string $whd): void
    {
        $this->whd = $whd;
    }

    /**
     * @return string|null
     */
    public function getWha(): ?string
    {
        return $this->wha;
    }

    /**
     * @param string|null $wha
     */
    public function setWha(?string $wha): void
    {
        $this->wha = $wha;
    }

    /**
     * @return string|null
     */
    public function getSjh(): ?string
    {
        return $this->sjh;
    }

    /**
     * @param string|null $sjh
     */
    public function setSjh(?string $sjh): void
    {
        $this->sjh = $sjh;
    }

    /**
     * @return string|null
     */
    public function getSjd(): ?string
    {
        return $this->sjd;
    }

    /**
     * @param string|null $sjd
     */
    public function setSjd(?string $sjd): void
    {
        $this->sjd = $sjd;
    }

    /**
     * @return string|null
     */
    public function getSja(): ?string
    {
        return $this->sja;
    }

    /**
     * @param string|null $sja
     */
    public function setSja(?string $sja): void
    {
        $this->sja = $sja;
    }

    /**
     * @return string|null
     */
    public function getVch(): ?string
    {
        return $this->vch;
    }

    /**
     * @param string|null $vch
     */
    public function setVch(?string $vch): void
    {
        $this->vch = $vch;
    }

    /**
     * @return string|null
     */
    public function getVcd(): ?string
    {
        return $this->vcd;
    }

    /**
     * @param string|null $vcd
     */
    public function setVcd(?string $vcd): void
    {
        $this->vcd = $vcd;
    }

    /**
     * @return string|null
     */
    public function getVca(): ?string
    {
        return $this->vca;
    }

    /**
     * @param string|null $vca
     */
    public function setVca(?string $vca): void
    {
        $this->vca = $vca;
    }

    /**
     * @return string|null
     */
    public function getGbh(): ?string
    {
        return $this->gbh;
    }

    /**
     * @param string|null $gbh
     */
    public function setGbh(?string $gbh): void
    {
        $this->gbh = $gbh;
    }

    /**
     * @return string|null
     */
    public function getGbd(): ?string
    {
        return $this->gbd;
    }

    /**
     * @param string|null $gbd
     */
    public function setGbd(?string $gbd): void
    {
        $this->gbd = $gbd;
    }

    /**
     * @return string|null
     */
    public function getGba(): ?string
    {
        return $this->gba;
    }

    /**
     * @param string|null $gba
     */
    public function setGba(?string $gba): void
    {
        $this->gba = $gba;
    }

    /**
     * @return string|null
     */
    public function getBsh(): ?string
    {
        return $this->bsh;
    }

    /**
     * @param string|null $bsh
     */
    public function setBsh(?string $bsh): void
    {
        $this->bsh = $bsh;
    }

    /**
     * @return string|null
     */
    public function getBsd(): ?string
    {
        return $this->bsd;
    }

    /**
     * @param string|null $bsd
     */
    public function setBsd(?string $bsd): void
    {
        $this->bsd = $bsd;
    }

    /**
     * @return string|null
     */
    public function getBsa(): ?string
    {
        return $this->bsa;
    }

    /**
     * @param string|null $bsa
     */
    public function setBsa(?string $bsa): void
    {
        $this->bsa = $bsa;
    }
}
