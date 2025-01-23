<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount ."<br>"."<br>"."<hr>";
        } else {
            echo "Invalid deposit amount <br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: $" . $amount ."<br>"."<br>"."<hr>";
        } else {
            echo "Invalid withdraw amount or insufficient funds <br>";
        }
    }

    public function displayDetails() {
        echo "Bank Account Details:<br> <br>";
        echo "Account Number: " . $this->accountNumber . "<br>";
        echo "Balance: $" . $this->balance . "<br>";
    }
}
?>
