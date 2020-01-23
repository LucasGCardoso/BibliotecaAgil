<?php
include_once("header.php");
if($_POST){
    include 'connection.php';
    include 'randomCode.php';

    $id = $_POST['numberId'];

    if(isset($_POST['name'])){
        $name = $_POST['name'];

        $query = "UPDATE books SET borrowedTo=?, isAvailable=?, returnCode=? WHERE numberId=?";
        $conn->prepare($query)->execute([$name, 0, $code, $id]);
    
        echo "<h3>Seu código de devolução é: {$code}</h3>";
        echo "<a href='withdraw.php'><div class='button_base b01_simple_rollover'>Voltar</div></a>";

    }else{
        $cod = $_POST['cod'];

        $query = "UPDATE books SET borrowedTo=?, isAvailable=?, returnCode=? WHERE numberId=? AND returnCode=?";
        $conn->prepare($query)->execute([null, 1, null, $id, $cod]);
                    
        header("Location: return.php");
    }
}else{
    header("Location: index.php");
}


?>
</body>
</html>