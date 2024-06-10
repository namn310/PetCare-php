<?php
include "Model/UserModel.php";
class UserController extends Controller
{
    use UserModel;
    public function index()
    {
        $this->loadView("inforUser.php");
    }
    public function changepass()
    {
        $this->loadView("changepass.php");
    }
    public function update()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $this->update($id);
        header("index.php?controller=user");
    }
}
