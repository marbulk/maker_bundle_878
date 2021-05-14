<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SourceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SourceRepository::class)
 */
#[ApiResource]
class Source
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $whateverField;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWhateverField(): ?string
    {
        return $this->whateverField;
    }

    public function setWhateverField(string $whateverField): self
    {
        $this->whateverField = $whateverField;

        return $this;
    }
}
