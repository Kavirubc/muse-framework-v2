<?php

namespace App\Controllers;

use Kaviru\MuseCore\Controller;

class CommunityAmbassadorController extends Controller
{
    public function communityGet()
    {
        view('community_ambassador/communities1.php');
    }


    public function eventsGet()
    {
        view('community_ambassador/events.php');
    }

    public function createCommunityEventGet()
    {
        view('community_ambassador/create-event.php');
    }

    public function eventDetailsGet()
    {
        view('community_ambassador/event-details.php');
    }

    public function writingGroupGet()
    {
        view('community_ambassador/writing-groups.php');
    }

    public function writingGroupPostsGet()
    {
        view('community_ambassador/writing-group-posts.php');
    }

    public function createCommunityGet()
    {

        view('community_ambassador/createCommunity.php');
    }

    public function createCommunityPost()
    {
        return "POST method in Controller is working!";
    }
    // public function communityAmbasssadorProfile()
    // {
    //     view('community_ambassador/community-ambassador-profile.php');
    // }
    

}
?>