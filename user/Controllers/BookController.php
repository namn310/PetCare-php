<?php
include "Model/BookModel.php";
class BookController extends Controller
{
    use BookModel;
    public function index()
    {
        $this->loadView("booking.php");
    }
    public function create()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $this->createBook($id);
        header("location:index.php?controller=cart");
    }
   
}
