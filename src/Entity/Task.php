<?php

// src/Entity/Task.php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    /**
     * @Assert\NotBlank
     */
    public $task;

    /**
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
     */
    protected $dueDate;
}

