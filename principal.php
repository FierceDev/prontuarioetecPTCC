<?php
    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
?>

<title>Principal</title>
</head>
<!-- Elaboração para definir nível de acesso do usuário-->
<body>

    <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"> 
        <div class="w3-quarter"><a href="dadosPessoais.php">Dados pessoais</a></div>
        <div class="w3-quarter">Administrador</div>
        <div class="w3-quarter">Atualiza senha</div>
        <div class="w3-quarter"><a href = "logoutAction.php">Sair</a></div>
    </div>

    <div style="background-color:blur; text-align:left;">
        <h2>Bem vindo usuário <?php echo $_SESSION['logado'] ?></h2><br>
        <?php
            echo "<h4> Imprime valor de logado:".$_SESSION['logado']."<br>";
            echo "Imprime valor de nivel acesso:".$_SESSION['acesso']."<br>";
            echo "Imprime valor de idusuario: ".$_SESSION['idusuario']."<br>";
            echo "Função date(): ".date('l jS \of F Y h:i:s A')." exemplo para captura </h4>";
        ?>
    </div>

</body>
</html>