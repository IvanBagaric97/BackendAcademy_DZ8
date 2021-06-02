<?php


namespace App\Entity\StandingsRow;


use App\Entity\AbstractPrimaryEntity;
use App\Entity\Competitor;
use App\Entity\Standings\Standings;
use Doctrine\ORM\Mapping as ORM;

class StandingsRow extends AbstractPrimaryEntity
{
    /**
     * @ORM\OneToOne(targetEntity="Competitor::class")
     * @var Competitor
     */
    protected Competitor $competitor;

    /**
     * @ORM\OneToOne(targetEntity="Standings::class")
     * @var Standings
     */
    protected Standings $standings;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $matches;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $wins;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $loses;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $scoresAgainst;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    protected ?int $draws;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    protected ?int $points;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    protected ?int $percentage;


}