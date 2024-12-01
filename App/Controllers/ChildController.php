<?php

namespace App\Controllers;

use Kaviru\MuseCore\Controller;
use mysqli;

class ChildController extends Controller
{
    public function childHome()
    {
        view('childuser/childHome.php');
    }


    public function childCreative()
    {
        view('childuser/childCreative.php');
    }

 
    public function childRelease()
    {
        view('childuser/childRelease.php');
    }


    public function childTopBooks()
    {
        view('childuser/childTopBooks.php');
    }


    public function childAuthorAward()
    {
        view('childuser/childAuthorAward.php');
    }


    public function childAward()
    {
        view('childuser/childAward.php');
            }
            
    public function childAuto()
    {
        view('childuser/childAuto.php');
    }

    public function childAutoInside()
    {
        view('childuser/childAutoInside.php');
    }

    public function childCreChapters()
    {
        view('childuser/childCreChapters.php');
    }

    public function childCrePoem()
    {
        view('childuser/childCrePoem.php');
    }

    public function childCreSong()
    {
        view('childuser/childCreSong.php');
    }

    public function childCreCha()
    {
        view('childuser/childCreCha.php');
    }
}