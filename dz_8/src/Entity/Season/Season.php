<?php


namespace App\Entity\Season;

use \App\Entity\AbstractPrimaryEntity;
use App\Entity\Competition\Competition;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Season
 * @ORM\Entity(repositoryClass="App\Repository\Season\SeasonRepository")
 * @package App\Entity\Season
 */
class Season extends AbstractPrimaryEntity
{
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $name;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    protected DateTime $start;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    protected DateTime $end;

    /**
     * @ORM\ManyToOne(targetEntity=Competition::class)
     * @var Competition
     */
    protected Competition $competition;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     */
    public function setEnd(DateTime $end): void
    {
        $this->end = $end;
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
}