<?php
require_once 'BankAccount.php';

$account = new BankAccount("2211566", 100);
$account->displayDetails();

$account->deposit(60);
$account->displayDetails();

$account->withdraw(50);
$account->displayDetails();

$account->withdraw(100);
$account->displayDetails();
?>
