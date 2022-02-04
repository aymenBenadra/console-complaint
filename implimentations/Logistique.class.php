<?php
require_once 'Printable.interface.php';

class Logistique extends Reclamation implements Printable
{
    private $logistique;
    public function __construct($problem, $description, $logistique)
    {
        parent::__construct($problem, $description);
        $this->logistique = $logistique;
    }
    public function __toString(): string
    {
        return "Reclamation de logistique: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\Nom de logistique: " . $this->logistique . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}
