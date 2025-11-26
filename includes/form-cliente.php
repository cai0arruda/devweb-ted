<form action="valida-dados.php" method="POST" class="card shadow-sm p-4">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
  </div>
  <div class="mb-3">
    <label for="sobrenome" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome" required>
  </div>
  <div class="mb-3">
    <label for="idade" class="form-label">Idade</label>
    <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite a idade" min="0" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
</form>
