<?php

class Task {
    private $title;
    private $description;
    protected $completed;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function markAsCompleted() {
        $this->completed = true;
    }

    public function markAsIncomplete() {
        $this->completed = false;
    }

    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }

    public function isCompleted() {
        return $this->completed;
    }
    
}

$fabio = new Task("Estudar","Fazer reunião em live");
echo "Tarefa: " . $fabio->getTitle() . "\n";
echo "Descrição" . $fabio->getDescription() . "\n";
echo "Status: " . ($fabio->isCompleted() ? "Concluída" : "Pendente") . "\n";
echo "<br>";

$fabio->markAsCompleted();
echo "Status: " . ($fabio->isCompleted() ? "Concluída" : "Pendente") . "\n";
echo "<br>";

$fabio->markAsIncomplete();
echo "Status: " . ($fabio->isCompleted() ? "Concluída" : "Pendente") . "\n";
echo "<br>";


