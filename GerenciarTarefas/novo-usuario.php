<h1>Novo usuário</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-2">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="mb-2">
    <label>Usuario</label>
    <input type="text" name="usuario" class="form-control">
  </div>
  <div class="mb-2">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control">
  </div>
  <div class="mb-2">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>