<?php

trait DanhmucModel
{
    public function modelRead()
    {

        //lay bien ket noi
        $conn = Connection::getInstance();
        $query = $conn->query("select * from danhmuc order by id_danhmuc ");
        //lay tat ca ket qua tra ve
        $result = $query->fetchAll();
        //---
        return $result;
    }
    // tinh tong so ban ghi
    public function modelTotal()
    {
        //lay bien ket noi
        $conn = Connection::getInstance();
        $query = $conn->query("select id from danhmuc");
        //ham rowCount: dem so ket qua tra ve
        return $query->rowCount();
    }
    //tao danh muc
    public function modelCreate()
    {
        $conn = Connection::getInstance();
        $name = $_POST['nameDM'];
        $dateAdd = date("d-m-y");
        $query = $conn->prepare("INSERT INTO danhmuc values tendanhmuc=:danhmuc,dateadd=:dateadd");
        $query->execute(["danhmuc" => $name, "dateadd" => $dateAdd]);
    }
    public function modelDelete($id)
    {
        $conn = Connection::getInstance();
        $conn->query("DELETE from danhmuc where id_danhmuc=$id");
    }
}
