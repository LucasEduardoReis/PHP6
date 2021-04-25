<?php
    //session_start();
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_SESSION['id_user']))
    {
        $nome = $_SESSION['nome_user'];
    }
?> 

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Sapiens</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="paginalogada.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cadastrar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="usuarios.php">Usuário</a></li>
                    <li><a class="dropdown-item" href="#">Alunos</a></li>
                    <li><a class="dropdown-item" href="#">Professores</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" >Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php" tabindex="-1" >Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" >Contato</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $nome; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Trocar senha</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
</nav>