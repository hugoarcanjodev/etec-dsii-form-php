<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

    <div class="w3-container w3-margin-top" style="max-width:600px; margin:auto;">
        <div class="w3-card-4 w3-white w3-padding-32 w3-round-large">
            
            <h2 class="w3-center w3-text-teal">Dados Recebidos</h2>
            <hr>

            <?php
            // Recebe e armazena
            $nome = htmlspecialchars($_POST['nome_completo_1']);
            $idade = htmlspecialchars($_POST['idade_2']);
            $profissao = htmlspecialchars($_POST['profissao_3']);
            $salario = htmlspecialchars($_POST['salario_pretendido_4']);
            $experiencia = htmlspecialchars($_POST['experiencia_anterior_5']);

            // Apresenta as informações
            echo "<p><b>Nome Completo:</b> $nome</p>";
            echo "<p><b>Idade:</b> $idade anos</p>";
            echo "<p><b>Profissão:</b> $profissao</p>";
            echo "<p><b>Salário Pretendido:</b> R$ " . number_format((float)$salario, 2, ',', '.') . "</p>";
            echo "<p><b>Experiência Anterior:</b><br>" . nl2br($experiencia) . "</p>";

            echo "<hr>";

            // Exibe mensagem personalizada
            echo "<div class='w3-panel w3-pale-green w3-leftbar w3-border-teal'>";
            echo "<p>Olá, <b>$nome</b>! É ótimo ver profissionais da sua área como <b>$profissao</b> buscando novas oportunidades. Analisando sua trajetória onde você relatou que <i>'$experiencia'</i>, acreditamos que você tem muito a agregar!</p>";
            echo "</div>";
            ?>

            <!-- Botão para retornar ao formulário -->
            <a href="cadastro.html" class="w3-button w3-dark-grey w3-block w3-round w3-margin-top">Voltar ao Formulário</a>

        </div>
    </div>

</body>
</html>