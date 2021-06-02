<?php


namespace App\Entity\Score;

use \App\Entity\AbstractPrimaryEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class FootballScore
 * @ORM\Embeddable()
 * @package App\Entity\Score
 */
class FootballScore extends AbstractPrimaryEntity
{
    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    protected ?int $halftime;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    protected ?int $overtime;

    /**
     * @ORM\Column(type="integer")
     * @var int|null
     */
    protected ?int $final;

    /**
     * @return int|null
     */
    public function getHalftime(): ?int
    {
        return $this->halftime;
    }

    /**
     * @param int|null $halftime
     */
    public function setHalftime(?int $halftime): void
    {
        $this->halftime = $halftime;
    }

    /**
     * @return int|null
     */
    public function getOvertime(): ?int
    {
        return $this->overtime;
    }

    /**
     * @param int|null $overtime
     */
    public function setOvertime(?int $overtime): void
    {
        $this->overtime = $overtime;
    }

    /**
     * @return int|null
     */
    public function getFinal(): ?int
    {
        return $this->final;
    }

    /**
     * @param int|null $final
     */
    public function setFinal(?int $final): void
    {
        $this->final = $final;
    }


}