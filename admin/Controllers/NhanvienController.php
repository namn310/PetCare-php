<?php
include("Model/NhanvienModel.php"); 
class NhanvienController extends Controller
{

    use NhanvienModel;
    public function index()
    {
        $this->loadView("Quanlynhanvien.php");
    }
    public function create()
    {
        $action = "index.php?controller=nhanvien&action=createPost";
        $this->loadView("Addnhanvien.php", ["action" => $action]);
    }
    public function createPost()
    {
        $this->modelCreate();
        header("Location:index.php?controller=nhanvien");
    }
}
