<?php 

    //Chamando as paginas criadas
    session_start();
    include_once('conexao.php');

        $id = $_POST['id_user'];
        $nome_user = $_POST['nome_user'];
        $email = $_POST['email'];
        $senha = sha1($_POST['senha']);
        $conf_senha = sha1($_POST['conf_senha']);

        if($senha == $conf_senha)
        {
            $sql="UPDATE tb_usuario SET nome_user = '$nome_user', email = '$email', senha = '$senha' WHERE id_user = {$id}";
            $resul_user = mysqli_query($mysqli, $sql);

            if(mysqli_affected_rows($mysqli))
            {
                echo "<script>alert('Registro atualizado com sucesso!');
                location.href='usuarios.php'
                </script>";
            }
            else
            {
                echo "<script>alert('Não foi possivel atualizar');
                location.href='usuarios.php'
                </script>";
            }
        }
        else
        {
            echo "<script>alert('As senhas não conferem, não foi possivel atualizar!');
                location.href='usuarios.php'
                </script>";
        }
?>