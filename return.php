<?php
  include_once("header.php");
?>
<body>
<?php
include 'connection.php';
if($_GET){
    $id = $_GET['numberId'];
    $query = "SELECT 
            numberId, title, author, releaseYear 
        FROM 
            books
        WHERE
            numberId = $id";
    $stmt = $conn->prepare( $query );
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
        echo "<h3>Você está prestes a devolver: </h3>";
            echo "<h4>Título: ".utf8_encode($title)."</h4>";
            echo "<h4>Autor: ".utf8_encode($author)."</h4>";
            echo "<h4>Ano de Lançamento: {$releaseYear}</h4>";
            echo "<br/>";

            echo "<h3>Por favor, digite o código de devolução abaixo</h3>
            <form action='process.php' method='POST'>
                <label for='cod'>Código:</label>
                <input hidden name ='numberId' value='{$id}'/>
                <input name='cod' type='text' required='true'/>
                <input type='submit' value='Devolver' class='action-button'/>
            </form>
            <a href='return.php'><div class='button_base b01_simple_rollover'>Cancelar</div></a>";

    }

}else{


$query = "SELECT 
            numberId, title, author, releaseYear 
        FROM 
            books
        WHERE
            isAvailable = 0 
        ORDER BY 
            numberId asc";
         
$stmt = $conn->prepare( $query );
$stmt->execute();

$num = $stmt->rowCount();
if($num>0){
    echo "<table id='tfhover' class='tftable' border='1'>";
        echo "<tr>";
            echo "<th>Título</th>";
            echo "<th>Autor</th>";
            echo "<th>Ano de Lançamento</th>";
            echo "<th>Ação</th>";
        echo "</tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            extract($row);

            echo "<tr>";
                echo "<td>".utf8_encode($title)."</td>";
                echo "<td>".utf8_encode($author)."</td>";
                echo "<td>{$releaseYear}</td>";
                echo "<td><a href='return.php?numberId={$numberId}'><div class='button_base b01_simple_rollover'>Devolver</div></a></td>";
            echo "</tr>";
        }
         
    echo "</table>";

}else{
    echo "<h3>Não há livros para serem devolvidos no momento</h3>";
}
echo "<a href='index.php'><div class='button_base b01_simple_rollover'>Voltar</div></a>";
}
?>
</body>
</html>