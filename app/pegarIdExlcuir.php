<?php
if (isset($_GET['id_pasta'])){
    $_SESSION['id_excluirPasta'] = intval($_GET['id_pasta']);
}elseif(isset($_GET['id_artigo'])){
    $_SESSION['id_excluirArtigo'] = intval($_GET['id_artigo']);
}
header("Location:/home");