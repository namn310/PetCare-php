<?php
include 'Model/ProductModel.php';
class ProductController extends Controller
{
    use ProductModel;
    //create
    //loadview product
    public function index()
    {
        
        $this->loadView("quanlysanpham.php");
    }
    public function create()
    {
        //tạo biến action để đưa vào action form
        $action = "index.php?controller=product&action=createPost";
        $this->loadView("Addsanpham.php", ["action" => $action]);
    }
    //thêm sản phẩm
    public function createPost()
    {
        $this->modelCreate();
        header("Location:index.php?controller=product");
    }
}
