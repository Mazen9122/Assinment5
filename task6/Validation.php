<?php
class Validation {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword($password) {
        return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
    }

    public static function validateUsername($username) {
        return preg_match('/^[A-Za-z\d]{3,20}$/', $username);
    }

    public static function validatePhoneNumber($phoneNumber) {
        return preg_match('/^\d{10,15}$/', $phoneNumber);
    }
}
?>


<?php
require_once 'Validation.php';

$email = "test@example.com";
echo "Email validation for '$email': " . (Validation::validateEmail($email) ? "Valid" : "Invalid") . "<br>";

$password = "Password1";
echo "Password validation for '$password': " . (Validation::validatePassword($password) ? "Valid" : "Invalid") ."<br>";

$username = "User123";
echo "Username validation for '$username': " . (Validation::validateUsername($username) ? "Valid" : "Invalid") ."<br>";

$phoneNumber = "1234567890";
echo "Phone number validation for '$phoneNumber': " . (Validation::validatePhoneNumber($phoneNumber) ? "Valid" : "Invalid") . "<br>";
?>
