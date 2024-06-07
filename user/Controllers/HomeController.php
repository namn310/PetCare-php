<?php
//load file model


class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        //load view
        $this->loadView("HomeView.php");
    }
}
