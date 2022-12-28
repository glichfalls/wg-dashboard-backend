<?php

namespace App\Model;

use ApiPlatform\Metadata\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Serializer\Annotation\Groups;

trait Id
{

    #[ORM\Id]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ApiProperty(identifier: true, openapiContext: ['example' => '00000000-0000-0000-0000-000000000000'])]
    #[Groups(['general:read'])]
    protected UuidInterface $id;

    public function getId(): string
    {
        return $this->id->toString();
    }

    public function setId(UuidInterface $id): void
    {
        $this->id = $id;
    }

    private function generateId(): void {
        $this->id = Uuid::uuid4();
    }

    public function __clone() {
        $this->generateId();
    }

}