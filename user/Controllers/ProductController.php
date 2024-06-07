<?php
include("Model/ProductModel.php");
class ProductController extends Controller
{
    use ProductModel;
    public function index()
    {
        $this->loadView("product.php");
    }
}
