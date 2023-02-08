<?php
    switch($_REQUEST["acao"]) {
        //fazendo o caso de cadastrar o usuario
        case 'cadastrar': 
            //fazendo a recepção dos dados dos inputs 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //usar o md5 nao deixa a senha exposta
            $data_nasc = $_POST["data_nasc"];

            //inserindo para dentro da tabela "usuarios" os campos e os valores que irão receber
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            
            $res = $conn->query($sql); //o resultado  vai executar a conexão da consulta chamando o sql

            if($res==true){
                //fazendo um if para aparecer msgs para o usuario
                print "<script>alert('Usuário cadastrado com sucesso!');</script>"; 
                print "<script>location.href=?page=listar;</script>";
            }else{
                print "<script>alert('Erro ao tentar cadastrar!');</script>";
                print "<script>location.href=?page=listar;</script>";
            }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); 
            $data_nasc = $_POST["data_nasc"];

            //fazendo uma atualizacao setando os valores
            $sql = "UPDATE usuarios SET 
                        nome= '{$nome}', 
                        email= '{$email}', 
                        senha= '{$senha}',
                        data_nasc= '{$data_nasc}'
                    WHERE
                    id=".$_REQUEST['id']; 

            
            $res = $conn->query($sql);

            //fazendo um if para aparecer msgs para o usuario
            if($res==true){
                print "<script>alert('Usuário Editado com Sucesso!');</script>";
                print "<script>location.href=?page=listar;</script>";
            }else{
                print "<script>alert('Erro ao tentar Editar!');</script>";
                print "<script>location.href=?page=listar;</script>";
            }

        break;

        case 'excluir':
            $sql = "Delete from usuarios WHERE id=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Usuário Excluido com Sucesso!');</script>";
                print "<script>location.href=?page=listar;</script>";
            }else{
                print "<script>alert('Erro ao tentar Excluir!');</script>";
                print "<script>location.href=?page=listar;</script>";
            }

        break;

    }