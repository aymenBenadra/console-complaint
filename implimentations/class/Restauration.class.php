<?php

require_once 'Reclamation.class.php';
require_once '../interface/Printable.interface.php';

class Restauration extends Reclamation implements Printable
{
    private $nomRestaurant;
    public function __construct($problem, $description, $priority = 2, $nomRestaurant)
    {
        parent::__construct($problem, $description, $priority);
        $this->nomRestaurant = $nomRestaurant;
    }
    public function __toString(): string
    {
        return "Reclamation de Restauration: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\tNom de restaurant: " . $this->nomRestaurant . "\n\tPriorité: " . $this->priority . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}

$restauration = new Restauration("Problème de restauration", "Description de restauration", 3, "Restauration");

echo $restauration;
