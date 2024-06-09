<?php
//load file model

include "Model/HomeModel.php";
class HomeController extends Controller
{
    use HomeModel;
    public function __construct()
    {
    }
    public function index()
    {
        //load view
        $this->loadView("HomeView.php");
    }
}
