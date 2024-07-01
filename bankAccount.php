<?php

class BankAccount
{
    // Properties
    public $balance;
    public $accountNumber;
    public $accountHolder;

    // Constructor
    public function __construct(
        $accountNumber,
        $accountHolder,
        $initialBalance = 0.0
    ) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    // Getter voor account nummer
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    // Setter voor account nummmer
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    // Getter voor balance
    public function getBalance()
    {
        return $this->balance;
    }

    // Method to deposit money
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "U heeft € $amount op uw bankaccount gezet. Uw huidige saldo is: € " . number_format($this->balance, 2) . "<br>";
        } else {
            throw new InvalidArgumentException("uw deposit moet een positief aantal zijn.");
        }
    }

    // Method to withdraw money
    public function withdraw($amount)
    {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "U heeft € $amount opgenomen. Uw huidige saldo is: € " . number_format($this->balance, 2) . "<br>";
            } else {
                echo "U heeft onvoldoende saldo om € $amount op te nemen.<br>";
            }
        } else {
            throw new InvalidArgumentException("Withdrawal amount must be positive.");
        }
    }
}

// maak nieuwe bank account
$account = new BankAccount(accountNumber: "123456", accountHolder: "Ben Dover", initialBalance: 34.4);

echo "Uw bankaccount nummer is: " . $account->getAccountNumber() . "<br>";
echo "Uw huidige saldo is: € " . number_format($account->getBalance(), 2) . "<br>";

$account->withdraw(43);

$account->deposit(85);

$account->withdraw(100);


$account->setAccountNumber("74832");
echo "Uw bankaccount nummer is gewijzigd in: " . $account->getAccountNumber() . "<br>";

