<?php

use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;

class BankAccount
{

    private int $balance;

    public function __construct()
    {
        $this->balance = 0;
    }


    public function getBalance(): int
    {
       return $this->balance;
    }

    public function addCredit(int $nb)
    {
        $this->balance = $this->balance + $nb;
        return $this->balance;
    }

    public function checkCredit($nb): bool
    {
        return is_int($nb);
    }

}