<link rel="stylesheet" href="style.css">

<header>Painel Administrativo - Patas do Nordeste</header>

<nav>
    <a href="index.php">Início</a>
    <a href="?pg=pets-admin">Pets</a>
    <a href="?pg=tutores-admin">Tutores</a>
    <a href="?pg=consultas-admin">Consultas</a>
</nav>

<div class="content"></div>

<?php
if(empty($_SERVER["QUERY_STRING"])){
    $var = "principal";
    include_once "$var.php";
}elseif($_GET['pg']){
    $pg = $_GET['pg'];
    include_once "$pg.php";
}else{
    echo "Página não encontrada";
}
?>
</div>