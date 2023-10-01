<?php


class Contact {
    private $name = 'Maria';
    private $email = 'maria@email.com';
    private $phone = "11-9448-3322";

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}