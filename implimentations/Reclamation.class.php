<?php

require_once 'Solvable.interface.php';

abstract class Reclamation implements Solvable
{
    protected $id;
    protected $problem;
    protected $description;
    protected $priority = 2; // default priority is 2 is standard, 1 is low, 3 is high
    protected $solved;
    protected static $ids = [];

    public function __construct($problem, $description, $priority = 2)
    {
        $this->id = self::generateId();
        $this->problem = $problem;
        $this->description = $description;
        $this->priority = $priority;
        $this->solved = false;
        self::$ids[] = $this->id;
    }

    /**
     * generates a unique id for each reclamation
     *
     * @return int
     */
    final protected static function generateId(): int
    {
        return count(self::$ids) + 1;
    }

    final public function solve(): void
    {
        $this->solved = true;
        echo "La réclamation a été résolue";
    }

    final public static function count(): int
    {
        return count(self::$ids);
    }
}
