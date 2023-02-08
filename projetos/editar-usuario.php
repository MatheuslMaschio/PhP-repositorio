<h1>Editar Usuário</h1>
<?php
    //selecionando todos da tabela usuário passando o parametro id que veio do url, selecionando assim o usuario certinho
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id']; 

    $res = $conn->query($sql); //o resultado  vai executar a conexão da consulta chamando o sql
    $row = $res->fetch_object(); 

?>
<form action="?page=salvar" method="POST">
    <!-- passando em value o dado que queremos que exiba dentro do campo do input  -->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> 
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" value="<?php print $row->senha; ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>