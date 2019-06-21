<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ApplicantRepository")
 */
class Applicant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $ResumePath;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $OldResumePaths;

    /**
     * @ORM\Column(type="integer")
     */
    private $ApplicationDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $InterviewDate;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Person", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Person;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResumePath(): ?string
    {
        return $this->ResumePath;
    }

    public function setResumePath(string $ResumePath): self
    {
        $this->ResumePath = $ResumePath;

        return $this;
    }

    public function getOldResumePaths(): ?string
    {
        return $this->OldResumePaths;
    }

    public function setOldResumePaths(?string $OldResumePaths): self
    {
        $this->OldResumePaths = $OldResumePaths;

        return $this;
    }

    public function getApplicationDate(): ?int
    {
        return $this->ApplicationDate;
    }

    public function setApplicationDate(int $ApplicationDate): self
    {
        $this->ApplicationDate = $ApplicationDate;

        return $this;
    }

    public function getInterviewDate(): ?int
    {
        return $this->InterviewDate;
    }

    public function setInterviewDate(int $InterviewDate): self
    {
        $this->InterviewDate = $InterviewDate;

        return $this;
    }

    public function getPerson(): ?Person
    {
        return $this->Person;
    }

    public function setPersonId(Person $Person): self
    {
        $this->Person = $Person;

        return $this;
    }
}
