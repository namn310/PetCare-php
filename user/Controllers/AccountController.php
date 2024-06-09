<?php
include "Model/AccountModel.php";
class AccountController extends Controller
{
    use AccountModel;
    public function index()
    {
        $this->loadView("login.php");
    }
    public function Login()
    {
        $this->LoginModel();
    }
    public function logOut()
    {
        unset($_SESSION["customer_email"]);
        header("location:index.php?controller=home");
    }
}
