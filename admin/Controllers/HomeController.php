<?php
include "Model/ProductModel.php";

class HomeController extends Controller
{
    use ProductModel;
  
    public function __construct()
    {
    }
    public function index()
    {
        //load view
        $this->loadView("HomeAdmin.php");
    }
}
