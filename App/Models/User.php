<?php

namespace App\Models;

use Kaviru\MuseCore\Database;

class User extends Database
{
    public $conn;
    public $table = 'users';
    protected $fillable = ['users_name', 'users_email', 'users_password', 'users_address', 'users_contactNumber'];
    protected $readable = ['users_name', 'users_email', 'users_password', 'users_address', 'users_contactNumber'];
    protected $dataTypes = [
        'id' => 'int',
        'users_name' => 'string',
        'users_email' => 'string',
        'users_password' => 'string',
        'users_address' => 'string',
        'users_contactNumber' => 'string'
    ];

    public string $users_name;
    public string $users_email;
    public string $users_password;
    public string $users_address;
    public string $users_contactNumber;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->connection;
    }
}
