<?php


// https://pt.stackoverflow.com/questions/114824/como-e-para-que-usar-mvc-no-php/116392

class ListDao 
{
    private $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll() 
    {
        /*$nome = $produto->getNome();
        $descricao = $produto->getDescricao();
        $preco = $produto->getPreco();

        $query = "INSERT INTO produtos (nome, descricao, preco) VALUES(?,?,?)"; 
        $stmt = mysqli_prepare($this->db->getConection(), $query);
        mysqli_stmt_bind_param($stmt,'sss', $nome, $descricao, $preco);
        mysqli_stmt_execute($stmt); 
	mysqli_stmt_close($stmt);*/

	$lists = new Array();
	$query = "SELECT id, style from list"; 
        $banco = new mysqli($this->db->getConection(), $query);
	while ($dados = $query->mysqli_fetch_array()) {
		$list = new List();
		$list.setId($dados['id']);
		$list.setId($dados['tyle']);
		array_push($list, $lists);
	}


    }

}
?>

