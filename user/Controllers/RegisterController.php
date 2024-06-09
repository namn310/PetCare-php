<?php
include "Model/RegisterModel.php";
class RegisterController extends Controller
{
    use RegisterModel;
    
    public function index()
    {
        $this->loadView("sign_in.php");
    }
    public function registerPost(){
        $this->modelRegister();
    }
}
