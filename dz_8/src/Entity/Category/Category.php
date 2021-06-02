<?php


namespace App\Entity\Category;

use \App\Entity\AbstractPrimaryEntity;
use App\Entity\Sport\Sport;
use Doctrine\ORM\Mapping as ORM;

class Category extends AbstractPrimaryEntity
{
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $name;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $slug;

    /**
     * @ORM\OneToMany(targetEntity=Sport::class)
     * @var int
     */
    protected int $sport_id;

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
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sport_id;
    }

    /**
     * @param int $sport_id
     */
    public function setSportId(int $sport_id): void
    {
        $this->sport_id = $sport_id;
    }

}