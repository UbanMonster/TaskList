<?php  

require_once ('../models/Produto.php');
require_once ('../models/ProdutoDAO.php');
require_once ('../config/Database.php');

class ProdutoController {

    public function insere() {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $conexao = new Database();
        $produto = new Produto();
        $produto->setNome($nome);
        $produto->setPreco($preco);
        $produto->setDescricao($descricao);
        $produtoDao = new ProdutoDao();
        $produtoDao->adiciona($conexao, $produto);
    }

}
