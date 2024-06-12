<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <?php  //$conn = new PDO("chuoi ket noi csdl",username,password);
    $conn = new PDO("mysql:hostname=localhost;dbname=data", "root", "");
    if (isset($_POST['submit'])) {
        $dateCre = $_POST['dateCre'];
        echo $dateCre;
        /*
        $query = $conn->prepare("insert into bang value dateCre=:data");
        $query->execute([":data" => $dataCre]);
        */
    }

    ?>
    <form method="post">
        <input type="datetime-local" name="dateCre">
        <button type="submit" name="submit">click</button>
    </form>

</body>
<script src="js/ckeditor/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/translations/vi.js"> </script>
<script>
    ClassicEditor.create(document.querySelector('#mota'), {
            language: 'vi'
        })
        .then(editor => {})
        .catch(error => {
            console.error(error)
        });
</script>
<style>
    .ck-editor__editable_inline {
        min-height: 250px;
        max-height: 450px;
    }
</style>

</html>