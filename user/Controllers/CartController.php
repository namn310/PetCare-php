<?php
class CartController extends Controller
{
    public function index()
    {
        $this->loadView("cart.php");
    }
}
