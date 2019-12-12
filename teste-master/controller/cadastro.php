<?php
include('../db/Livros.php');
$livros = new Livros();
$nm_livro    = filter_input(INPUT_POST, "nm_livro");
$autor     = filter_input(INPUT_POST, "autor");
$descricao = filter_input(INPUT_POST, "descricao");
$isbn      = filter_input(INPUT_POST, "isbn");

echo $livros->Cadastra_livro($nm_livro, $autor, $descricao, $isbn);

?>