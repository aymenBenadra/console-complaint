<?php
require_once 'Reclamation.class.php';
require_once '../interface/Printable.interface.php';

class Logistique extends Reclamation implements Printable
{
    private $logistique;
    public function __construct($problem, $description, $logistique, $priority = 2)
    {
        parent::__construct($problem, $description, $priority);
        $this->logistique = $logistique;
    }
    public function __toString(): string
    {
        return "Reclamation de logistique: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\tNom de logistique: " . $this->logistique . "\n\tPriorité: " . $this->priority . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}