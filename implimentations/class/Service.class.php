<?php
class Service extends Reclamation implements Printable
{
    private $service;
    public function __construct($problem, $description, $service, $priority = 2)
    {
        parent::__construct($problem, $description, $priority);
        $this->service = $service;
    }
    public function __toString(): string
    {
        return "Reclamation de service: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\tNom de service: " . $this->service . "\n\tPriorité: " . $this->priority . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}