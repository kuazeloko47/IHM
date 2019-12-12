<?php
class Livros
{
    public function Cadastra_livro($nm_livro, $autor, $descricao,$isbn)
    {
        include("MySQL.php");
        $mysql = new MySQL();
        $query = "INSERT INTO livros(
                                    isbn, 
                                    nm_livro, 
                                    autor, 
                                    descricao) 
                        VALUES(
                            '$isbn',
                            '$nm_livro',
                            '$autor',
                            '$descricao')";
        try
        {
            return mysqli_query($mysql->Conexao(), $query);
        }
        catch(Exception $ex)
        {
            return false;
        }
    }
}