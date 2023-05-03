<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" type="text/css" href="formulario.css" />
  </head>
  <body>
    <h1>Cadastro</h1>
    <div class="box">
      <form action="cadastro.php" method="POST">
          <div class="campo">
              <div class="control">
                  <input name="nome" type="text" placeholder="Nome" autofocus>
              </div>
          </div>
          <div class="campo">
              <div class="control">
                  <input name="email" type="text" placeholder="E-Mail">
              </div>
          </div>
          <div class="campo">
              <div class="control">
                  <input name="senha" type="password" placeholder="Senha">
              </div>
          </div>
          <button type="submit" value="Cadastrar">Cadastrar</button>
      </form>
    </div>
  </body>
</html>

