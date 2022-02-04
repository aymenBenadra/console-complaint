<?php
class Restauration extends Reclamation implements Printable
{
    private $nomRestaurant;
    public function __construct($problem, $description, $nomRestaurant)
    {
        parent::__construct($problem, $description);
        $this->nomRestaurant = $nomRestaurant;
    }
    public function __toString(): string
    {
        return "Reclamation de Restauration: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\Nom de restaurant: " . $this->nomRestaurant . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}