<?php
class Service extends Reclamation implements Printable
{
    private $service;
    public function __construct($problem, $description, $service)
    {
        parent::__construct($problem, $description);
        $this->service = $service;
    }
    public function __toString(): string
    {
        return "Reclamation de service: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\Nom de service: " . $this->service . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}