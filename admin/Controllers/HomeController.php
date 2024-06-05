<?php
class HomeController extends Controller
{
    //ham tao - check login
   
    public function __construct()
    {
        
    }
    public function index()
    {
        //load view
        $this->loadView("HomeAdmin.php");
    }
}
