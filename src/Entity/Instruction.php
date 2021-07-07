<?php

namespace App\Entity;

use App\Repository\InstructionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InstructionRepository::class)
 */
class Instruction
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
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $instruction_rank;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInstructionRank(): ?int
    {
        return $this->instruction_rank;
    }

    public function setInstructionRank(int $instruction_rank): self
    {
        $this->instruction_rank = $instruction_rank;

        return $this;
    }
}
