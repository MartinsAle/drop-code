<div id="topo"></div>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Entre em contato conosco</h2>
    <p class="lead">Deixe sua mensagem com informando sua dúvida ou nos mande a sua sugestão!</p>
  </div>

  <div class="row">
    <div class="col-md-12 order-md-1">
      <div id="resultado"></div>
      <h4 class="mb-3">Contato</h4>
      <form class="needs-validation" novalidate action="" method="POST" id="formContato">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" name="nome" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Digite seu nome
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Sobrenome</label>
            <input type="text" class="form-control" id="lastName" name="sobrenome" placeholder="" value="" required>
            <div class="invalid-feedback">
              Digite seu sobrenome
            </div>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
            <div class="invalid-feedback">
              Informe um e-mail válido
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Assunto</label>
            <input type="text" class="form-control" id="lastName" name="assunto" placeholder="" value="" required>
            <div class="invalid-feedback">
              Informe um assunto
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Mensagem</label>
          <textarea name="mensagem" class="form-control" id="" cols="30" rows="10" required></textarea>
          <div class="invalid-feedback">
            Escreva a sua mensagem
          </div>
        </div>
        <div class="pt-5">
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="sendForm">Enviar mensagem</button>
        </div>
      </form>
    </div>
  </div>
</div>