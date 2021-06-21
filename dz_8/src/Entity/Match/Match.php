<?php


namespace App\Entity\Match;

use \App\Entity\AbstractPrimaryEntity;
use App\Entity\Competition\Competition;
use App\Entity\Competitor\Competitor;
use App\Repository\Match\MatchRepository;
use App\Entity\Season\Season;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Match
 * @ORM\Entity(repositoryClass=MatchRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="dtype", type="string")
 * @ORM\DiscriminatorMap({
 *  "basketball"=Basketball::class,
 *  "football"=Football::class
 * })
 * @ORM\Table(name="match")
 * @package App\Entity\Match
 */
abstract class Match extends AbstractPrimaryEntity
{
    /**
     * @ORM\ManyToOne(targetEntity=Competitor::class)
     * @var Competitor
     */
    protected Competitor $homeCompetitor;

    /**
     * @ORM\ManyToOne(targetEntity=Competitor::class)
     * @var Competitor
     */
    protected Competitor $awayCompetitor;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    protected DateTime $start;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $status;

    /**
     * @ORM\ManyToOne(targetEntity=Competition::class)
     * @var Competition
     */
    protected Competition $competition;

    /**
     * @ORM\ManyToOne(targetEntity=Season::class)
     * @var Season
     */
    protected Season $season;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $winner;

    public function __construct()
    {
        $this->homeCompetitor = new Competitor();
        $this->awayCompetitor = new Competitor();
        $this->competition = new Competition();
        $this->season = new Season();
    }

    /**
     * @return Competitor
     */
    public function getHomeCompetitor(): Competitor
    {
        return $this->homeCompetitor;
    }

    /**
     * @param Competitor $homeCompetitor
     */
    public function setHomeCompetitor(Competitor $homeCompetitor): void
    {
        $this->homeCompetitor = $homeCompetitor;
    }

    /**
     * @return Competitor
     */
    public function getAwayCompetitor(): Competitor
    {
        return $this->awayCompetitor;
    }

    /**
     * @param Competitor $awayCompetitor
     */
    public function setAwayCompetitor(Competitor $awayCompetitor): void
    {
        $this->awayCompetitor = $awayCompetitor;
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     */
    public function setStart(DateTime $start): void
    {
        $this->start = $start;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return Competition
     */
    public function getCompetition(): Competition
    {
        return $this->competition;
    }

    /**
     * @param Competition $competition
     */
    public function setCompetition(Competition $competition): void
    {
        $this->competition = $competition;
    }

    /**
     * @return Season
     */
    public function getSeason(): Season
    {
        return $this->season;
    }

    /**
     * @param Season $season
     */
    public function setSeason(Season $season): void
    {
        $this->season = $season;
    }

    /**
     * @return int
     */
    public function getWinner(): int
    {
        return $this->winner;
    }

    /**
     * @param int $winner
     */
    public function setWinner(int $winner): void
    {
        $this->winner = $winner;
    }
}