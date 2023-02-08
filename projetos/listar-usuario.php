<h1>Tabela de Usúario</h1>
<?php
    //seçecionando todos da tabela de usuários
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql); //o resultado  vai executar a conexão da consulta chamando o sql

    $qtd = $res->num_rows; //qtd de resultados pega do resultado o numero de linhas

    if($qtd > 0){ //se quantidade de linhas foi maior que 0 significa que o usuarios foram encontrados
        print "<table class='table table-hover table-striped table-bordered'>"; //colocando dentro de uma tabela
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações </th>";
        while($row = $res -> fetch_object()){ // o object  tras os objetos do resultado da consulta, e joga na variavel row, assim podendo imprimir individualmente cada obj
            print "<tr>";
            print "<td>" .$row->id."</td>";
            print "<td>" .$row->nome."</td>";
            print "<td>" .$row->email."</td>";
            print "<td>" .$row->data_nasc."</td>"; 
            print "<td> <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button> 
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "<tr>";
        }          
        print '</table>';
    }else{ //se nao achar manda uma msg para o usuario que nao achou
        print "<p class='alert alert-danger'>Não foi encontrado usuarios!</p>";
    }	


?>

<td>
    <button onclick="location.href='?page=salvar&acao=salvar&id=<?php echo $id ?>'" class='btn btn-success'>Salvar</button>
</td>