<?php
include 'Model/ProductModel.php';
class ProductController extends Controller
{
    use ProductModel;
    //create
    //loadview product
    public function index()
    {
        //quy dinh so ban gi 1 trang
        $recordPerPage = 10;
        //ham celi lam chan;
        $numPage = ceil($this->modelTotal() / $recordPerPage);
        //đọc bản ghi sql để xổ dữ liệu vào view
        $data = $this->modelRead($recordPerPage);
        $this->loadView("quanlysanpham.php", ["data" => $data, "numPage" => $numPage]);
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
    //Xóa dữ liệu
    public function delete()
    {
        //tao biến action đưa vào form
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $this->modelDelete($id);
        header("Location:index.php?controller=product");
    }
    public function change()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $action = "index.php?controller=product&action=changePost&id=$id";
        $record = $this->modelGetRecord($id);
        $this->loadView("FormChangeProduct.php", ["record" => $record, "action" => $action]);
    }
    public function changePost()
    {
        $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
        $this->modelChange($id);
        header("Location:index.php?controller=product");
    }
}
