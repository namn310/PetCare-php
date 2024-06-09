<?php
class UserController extends Controller
{
    public function index()
    {
        $this->loadView("inforUser.php");
    }
}
