<?php
$fornecedor_nome = $_POST['fornecedor_nome'];
$fornecedor_empresa = $_POST['fornecedor_empresa'];
$fornecedor_CNPJ = $_POST['fornecedor_CNPJ'];
$fornecedor_telefone = $_POST['fornecedor_telefone'];
$fornecedor_email = $_POST['fornecedor_email'];
$fornecedor_endereco = $_POST['fornecedor_endereco'];
$fornecedor_produto = $_POST['fornecedor_produto'];

$conexao = mysqli_connect('localhost', 'root', '', 'tccteste2');
$sql = "insert into cad_fornecedor(fornecedor_nome, fornecedor_empresa, fornecedor_CNPJ, fornecedor_telefone, fornecedor_email, fornecedor_endereco, fornecedor_produto) values ('$fornecedor_nome','$fornecedor_empresa', '$fornecedor_CNPJ', '$fornecedor_telefone', '$fornecedor_email', '$fornecedor_endereco', '$fornecedor_produto')";

$inserir = mysqli_query($conexao,$sql);

if ($inserir) {
echo "Cadastro realizado com sucesso!";
}
else{
echo "erro";
}
mysqli_close ($conexao);
?>