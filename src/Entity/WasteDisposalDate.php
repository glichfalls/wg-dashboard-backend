<?php

namespace App\Entity;

use App\Model\Id;
use DateTimeInterface;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;

#[Entity]
class WasteDisposalDate
{
    use Id;

    #[Column(type: 'date')]
    private DateTimeInterface $date;

    #[Column(type: 'string')]
    private string $zone = '';

    #[Column(type: 'string')]
    private string $description = '';

    public function __construct()
    {
        $this->generateId();
    }

    public function getDate(): DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(DateTimeInterface $date): void
    {
        $this->date = $date;
    }

    public function getZone(): string
    {
        return $this->zone;
    }

    public function setZone(string $zone): void
    {
        $this->zone = $zone;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}