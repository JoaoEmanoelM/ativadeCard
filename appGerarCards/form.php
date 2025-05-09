<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Cards de Jogos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Gerador de Cards de Jogos</h1>

        <form action="gerarCard.php" method="post" class="bg-white p-4 rounded shadow">
            <div class="mb-3">
                <label for="nomeJogo" class="form-label">Nome do Jogo</label>
                <input type="text" class="form-control" id="nomeJogo" name="nomeJogo" required>
            </div>

            <div class="mb-3">
                <label for="desenvolvedorJogo" class="form-label">Desenvolvedor</label>
                <input type="text" class="form-control" id="desenvolvedorJogo" name="desenvolvedorJogo" required>
            </div>

            <div class="mb-3">
                <label for="anoJogo" class="form-label">Ano de Lançamento</label>
                <input type="text" class="form-control" id="anoJogo" name="anoJogo" required>
            </div>

            <div class="mb-3">
                <label for="linkImgJogo" class="form-label">Link para a Capa do Jogo</label>
                <input type="text" class="form-control" id="linkImgJogo" name="linkImgJogo" required>
            </div>

            <div class="mb-3">
                <label for="generoJogo" class="form-label">Gênero</label>
                <input type="text" class="form-control" id="generoJogo" name="generoJogo" required>
            </div>

            <button type="submit" class="btn btn-primary">Gerar Card</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>