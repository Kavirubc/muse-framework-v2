<?php

namespace App\Validations;

use App\Models\User;

class SignUpValidation
{
    
    private $email;
    private $name;
    private $password;
    private $confirmPassword;
    private $address;
    private $contactNumber;

    /**
     * Insert data for validation
     * @param mixed $email
     * @param mixed $name
     * @param mixed $password
     * @param mixed $confirmPassword
     * @param mixed $address
     * @param mixed $contactNumber
     */
    public function __construct($email, $name, $password, $confirmPassword, $address, $contactNumber) {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->address = $address;
        $this->contactNumber = $contactNumber;
    }
        
    /**
     * Start Validation after initiating the class.
     * @return void
     */
    public function signupUser(): void {
        $errors = [];

        if (!$this->emptyInput()) {
            $errors[] = 'emptyinput';
        }
        if (!$this->isValidEmail()) {
            $errors[] = 'invalidEmail';
        }
        if (!$this->checkUser()) {
            $errors[] = 'emailTaken';
        }
        if (!$this->pwdMatch()) {
            $errors[] = 'passwordmismatch';
        }

        if (!empty($errors)) {
            // Convert errors array to a query string
            $errorString = implode(',', $errors);
            redirect(route("signup") . "?errors=$errorString");
        }

        // If all validations pass, set the user in the database
        $newUser = new User();
        $newUser->create([
            'users_name' => $this->name,
            'users_email' => $this->email,
            'users_password' => password_hash($this->password, PASSWORD_BCRYPT),
            'users_address' => $this->address,
            'users_contactNumber' => $this->contactNumber
        ]);
        
        if(!$newUser){
            redirect(route("home") . "?errors=stmtfailed");
        }
    }

    private function checkUser(): bool {

        $checkUser = new User();
        $stmt = $checkUser->connection->prepare('SELECT users_id FROM ? WHERE users_email = ?;');
    
        if (!$stmt->execute([$checkUser->table, $this->email])) {
            redirect(route("signup") . "?errors=stmtfailed");
        }
    
        return $stmt->rowCount() > 0; // Return true if the user exists
    }

    /**
     * Check for empty inputs
     * @return bool
     */
    private function emptyInput(): bool {
        $fields = [
            $this->email,
            $this->name,
            $this->password,
            $this->confirmPassword,
            $this->address,
            $this->contactNumber,
        ];
        
        // Check if any field is empty
        foreach ($fields as $field) {
            if (empty($field)) {
                return false; // There's an empty input
            }
        }
        return true; // All inputs are filled
    }

    /**
     * Validate the email format
     * @return bool
     */
    private function isValidEmail(): bool {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Check if the passwords match
     * @return bool
     */
    private function pwdMatch(): bool {
        if ($this->password !== $this->confirmPassword) {
            return false;
        } else {
            return true;
        }
    }
}