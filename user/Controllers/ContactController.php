<?php
class ContactController extends Controller
{
    public function index()
    {
        $this->loadView("contact.php");
    }
}
