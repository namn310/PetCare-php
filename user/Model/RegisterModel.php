<?php
trait RegisterModel{
    public function modelRegister(){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        //kiem tra neu email khong ton tai trong table customers thi insert
        $conn = Connection::getInstance();
        $check = $conn->prepare("select id from customers where email=:email");
        $check->execute(array("var_email" => $email));
        if ($check->rowCount() == 0) {
            $password = md5($password);
            $query = $conn->prepare("insert into customers set name=:name,email=:email,password=:password");
            $query->execute(array("name" => $name, "email" => $email, "password" => $password));
            //di chuyen den trang login
            header("location:index.php?controller=account");
        } else
            header("location:index.php?controller=account&action=register");
    }
}
?>