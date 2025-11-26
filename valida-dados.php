<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dados do Cliente | Meu Site PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'includes/menu.php'; ?>

  <main class="container">
    <h1 class="mb-4">Dados enviados</h1>
    <div class="card shadow-sm p-4">
      <?php
        $nome = $_POST['nome'] ?? '';
        $sobrenome = $_POST['sobrenome'] ?? '';
        $idade = $_POST['idade'] ?? '';
      ?>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></li>
        <li class="list-group-item"><strong>Sobrenome:</strong> <?php echo htmlspecialchars($sobrenome); ?></li>
        <li class="list-group-item"><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></li>
      </ul>
      <div class="mt-4 d-flex gap-2">
        <a href="cadastro.php" class="btn btn-outline-primary">Voltar ao cadastro</a>
        <a href="index.php" class="btn btn-primary">Ir para Home</a>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
