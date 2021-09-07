<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BankAccountTest extends TestCase
{
    public function testGetBalance(): void
    {
        $account = new BankAccount();
        $this->assertEquals(0, $account->getBalance());
    }

    public function testAddCredit(): void
    {
        $account = new BankAccount();
        $account->addCredit(10);
        $this->assertEquals(10, $account->getBalance());
    }

    public function testCheckCredit(): void
    {
        $account = new BankAccount();
        $this->assertEquals(true, $account->checkCredit(10));
    }




}
