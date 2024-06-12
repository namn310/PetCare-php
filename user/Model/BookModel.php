<?php
trait BookModel
{
    public function createBook($id)
    {
        $conn = Connection::getInstance();
        $name = $_POST['Bossname'];
        $service = $_POST['dichvu'];
        $type = $_POST['Bosstype'];
        $goi = $_POST['goi'];
        $weight = $_POST['weight'];
        $dateBook = $_POST['date'];
        $dateCreate = date("d-m-y");
        $query = $conn->prepare("insert into booking(idCus,nameService,type,goi,namePet,weight,dateBook,dateCreate) values (:id,:nameService,:type,:goi,:name,:weight,:dateBook,:dateCreate)");
        // $query->execute();
        //$query = $conn->prepare("insert into booking values idCus:_idCus,nameService:_nameService,type:_type,goi:_goi,namePet:_namePet,weight=:_weight,dateBook=:_dateBook,dateCreate=:_dateCreate ");
        $query->execute([":id" => $id, ":nameService" => $service, ":type" => $type, "goi" => $goi, ":name" => $name, ":weight" => $weight, ":dateBook" => $dateBook, ":dateCreate" => $dateCreate]);
        //$query->execute(["id" => $id, "service" => $service, "name" => $name, "type" => $type, "goi" => $goi, "weight" => $weight, "date" => $dateBook, "dateCre" => $dateCreate]);
        echo '<script>alert("Đặt lịch thành công")</script>';
    }
   
}
