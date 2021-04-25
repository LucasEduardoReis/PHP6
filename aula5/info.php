<?php
    session_start();
    if(!isset($_SESSION['id_user']))
    {
    header("location: index.php");
    exit();
    }

    include("head.php");
    include("menu.php");
    include("footer.php");

?>

<h1>Classic editor</h1>
    <div id="editor">
        <p>Este é um exemplo de conteúdo.</p>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>