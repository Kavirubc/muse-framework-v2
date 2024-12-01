<?php

namespace App\Controllers;

use PDO;
use Kaviru\MuseCore\Database;
use Kaviru\MuseCore\Controller;
use Kaviru\MuseCore\DataHandling;
use Kaviru\MuseCore\ErrorHandling;

class UserController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        view('user/index.php');
    }

    public function login()
    {
        $data = new DataHandling;

        view('user/login.php');
    }
    
}
