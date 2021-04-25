<?php 

    //Chamando as paginas criadas
    session_start();
    include("head.php");
    include("menu.php");
    include_once('conexao.php');

?>


<div class="tit">
    <h3>Usuário Cadastrado no Sistama</h3>
</div>
<!-- classe de cadastro -->
<div class="adduser">
    <a href="caduser.php">
    <button type="button" class="btn btn-success">Adicionar Usuário</button>
    </a>
</div>

<div class="search">
    <form action="#" method="POST" class="row g-3">
        <div class="col-auto">
            <label for="busca" class="visually-hidden">Localizar</label>
            <input type="text" class="form-control" id="busca" name="busca" placeholder="Localizar">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="buscar">Buscar</button>
        </div>
    </form>
</div>

<div class="table_user">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="30%">Nome</th>
                <th scope="col" width="30%">E-mail</th>
                <th scope="col" width="20%">Senha</th>
                <th scope="col" width="20%" colspan="2">Ação</th>
            </tr>
        </thead>
    </table>
</div>

<?php 
    $busca = $_POST['busca'] ?? '';

    $results = $mysqli->query("SELECT * FROM tb_usuario WHERE nome_user LIKE '%$busca%' ORDER BY nome_user ASC");

    print '<table border="0" class="table">';
    while($row = $results->fetch_array())
    {

        $id = $row["id_user"];
        print '<tr>';
        print '<td width="30%">'.$row["nome_user"].'</td>';
        print '<td width="30%">'.$row["email"].'</td>';
        print '<td width="20%">**********</td>';
        print '<td width="20%">
                            <a href="editar.php?ide='.$row["id_user"].'">Editar | </a>
                            <a href="deletar_user.php?idd='.$row["id_user"].'">Excluir</a>
        </td>';
        print '</tr>';

    }
    print '</table>';

    echo 'Registros encontrados: '.$results->num_rows;

    $results->free();
    $mysqli->close();
?>