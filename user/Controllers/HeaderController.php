<?php


class HeaderController extends Controller
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
