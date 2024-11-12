<?php

namespace App\Modules\Home\Controllers;

use App\Modules\Authentication\Models\UserModel;
use App\Controllers\BaseController;


class HomeController extends BaseController
{

    public function index()
    {
        return view('App\Modules\Home\Views\home');
    }

    public function course_correct()
    {
        return view('App\Modules\Home\Views\course-correct');
    }

    public function about()
    {
        return view('App\Modules\Home\Views\about');
    }

    public function projects()
    {
        return view('App\Modules\Home\Views\project');
    }

    public function contact()
    {
        return view('App\Modules\Home\Views\contact');
    }

    public function header()
    {
        return view('App\Modules\Home\Views\header');
    }

    public function footer()
    {
        return view('App\Modules\Home\Views\footer');
    }

    public function peer_programming()
    {
        return view('App\Modules\Home\Views\Peer-progamming\peer_programming');
    }

    public function interview_preparation()
    {
        return view('App\Modules\Home\Views\Interview-preparation\interview_prep');
    }

    public function code_mentorship()
    {
        return view('App\Modules\Home\Views\Code-Mentorship\code_mentorship');
    }
}
