<?php

require_once 'Solvable.interface.php';

abstract class Reclamation implements Solvable
{
    protected $id;
    protected $problem;
    protected $description;
    protected $solved;
    protected static $ids = [];

    public function __construct($problem, $description)
    {
        $this->id = self::generateId();
        $this->problem = $problem;
        $this->description = $description;
        $this->solved = false;
        self::$ids[] = $this->id;
    }

    protected static function generateId(): int
    {
        return count(self::$ids) + 1;
    }

    final public function solve(): void
    {
        $this->solved = true;
        echo "La réclamation a été résolue";
    }

    public static function count(): int
    {
        return count(self::$ids);
    }

    public function __toString(): string
    {
        return "Reclamation: " . $this->id . "\n\tProblem: " . $this->problem . "\n\tDescription: " . $this->description . "\n\tState: " . ($this->solved ? "Solved" : "Not Solved");
    }
}
