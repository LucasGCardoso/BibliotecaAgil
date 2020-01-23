<?php
  include_once("header.php");
?>
<script>
function showDiv() {
  var div = document.getElementById("doar");
  var button = document.getElementById("donateB");
  if (div.style.display === "none") {
    div.style.display = "block";
    button.innerHTML = "Mudei de ideia";
  } else {
    div.style.display = "none";
    button.innerHTML = "Doar um livro";
  }
}
</script>
<body>
    <h2>Olá, esta é a biblioteca ágil! O que deseja fazer?</h2>

    <a href="withdraw.php"><div class="button_base b01_simple_rollover">Retirar</div></a>
    <a href="return.php"><div class="button_base b01_simple_rollover">Devolver</div></a>
    <div onclick="showDiv();" class="button_base b01_simple_rollover" id="donateB">Doar um livro</div>

    <div id="doar" style="display: none">
    <h3>Ficamos felizes com sua doação! Por favor, preencha os campos abaixo</h3>
    <form action="addNewBook.php" method="POST" id="msform">
        <input name="title" placeholder="Título do Livro" required="true"/>
        <input name="author" placeholder="Autor do Livro" required="true"/>
        <input name="releaseYear" placeholder="Ano de Lançamento do Livro" required="true"/>
        <input type="submit" value="Doar!" class="action-button">
    </form>
    </div>
</body>
<?php
if($_GET){
    if($_GET['add'] == true)
        echo "<script>alert('Obrigado por doar seu livro!')</script>";
}
?>
</html>