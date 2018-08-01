<?php header('Content-type: text/html; charset=ISO-8859-1'); ?>
<!DOCTYPE html>
<html >
   <head>
      <title>Gerar Certificado PDF em PHP - Enviando por e-mail</title>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="container">
         <form class="form-horizontal" action="certificado.php" method="post"  id="contact_form">
            <fieldset>
               <center>
                  <h1>Gerar certificado</h1>
               </center>
               <p>&nbsp;</p>
               <div class="form-group">
                  <label class="col-md-4 control-label">Evento</label>  
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
                        <select name="evento" id="evento" class="form-control">
                          <option value="">SELECIONE O EVENTO</option>
                          <option value="Primeiro Encontro Infantil ECFBE">Primeiro Encontro Infantil ECFBE</option>
                          <option value="Primeiro Encontro ECFBE">Primeiro Encontro ECFBE</option>
                          <option value="Segundo Encontro ECFBE">Segundo Encontro ECFBE</option>
                          <option value="Terceiro Encontro ECFBE">Terceiro Encontro ECFBE</option>
                          <option value="Quarto Encontro ECFBE">Quarto Encontro ECFBE</option>
                          <option value="Boas Práticas Básico">Boas Práticas: Geladeira vs Nutrição</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">Nome</label>  
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="nome" placeholder="Nome completo" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>  
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" >CPF</label> 
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                        <input name="cpf" placeholder="CPF" class="form-control"  type="text" maxlength="14" onkeypress="formatar('###.###.###-##', this);">
                     </div>
                  </div>
               </div>

               <input type="hidden" name="data_evento" value="28 de Abril de 2018">
               <input type="hidden" name="carga_horaria" value="10">
     
      <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
      <button type="submit" class="btn btn-default col-md-12" >Gerar Certificado <span class="glyphicon glyphicon-download-alt"></span></button>
      </div>
      </div>
      </fieldset>
      </form>
      </div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

      <!-- ****** Simples função de colocar mascara em javascript ****** -->
      <script>  function formatar(mascara, documento){   
         var i = documento.value.length;
         var saida = mascara.substring(0,1);
         var texto = mascara.substring(i);
         if (texto.substring(0,1) != saida){documento.value += texto.substring(0,1);}
         }
      </script>

      <!-- ****** Validando o formulário (inclusive o CPF) ****** -->
      <script>
      $(document).ready(function() {
          $('#contact_form').bootstrapValidator({
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  nome: {
                      validators: {
                          notEmpty: {
                              message: 'Insira o seu nome'
                          }
                      }
                  },
                  email: {
                      validators: {
                          notEmpty: {
                              message: 'Insira o seu e-mail'
                          },
                          emailAddress: {
                              message: 'E-mail incorreto'
                          }
                      }
                  },
                  evento: {
                      validators: {
                          notEmpty: {
                              message: 'Selecione o evento'
                          }
                      }
                  },
                  cpf: {
                      validators: {
                          callback: {
                              message: 'CPF Invalido',
                              callback: function(value) {
                                  //retira mascara e nao numeros       
                                  cpf = value.replace(/[^\d]+/g, '');
                                  if (cpf == '') return false;

                                  if (cpf.length != 11) return false;

                                  // testa se os 11 digitos são iguais, que não pode.
                                  var valido = 0;
                                  for (i = 1; i < 11; i++) {
                                      if (cpf.charAt(0) != cpf.charAt(i)) valido = 1;
                                  }
                                  if (valido == 0) return false;

                                  //  calculo primeira parte  
                                  aux = 0;
                                  for (i = 0; i < 9; i++)
                                      aux += parseInt(cpf.charAt(i)) * (10 - i);
                                  check = 11 - (aux % 11);
                                  if (check == 10 || check == 11)
                                      check = 0;
                                  if (check != parseInt(cpf.charAt(9)))
                                      return false;

                                  //calculo segunda parte  
                                  aux = 0;
                                  for (i = 0; i < 10; i++)
                                      aux += parseInt(cpf.charAt(i)) * (11 - i);
                                  check = 11 - (aux % 11);
                                  if (check == 10 || check == 11)
                                      check = 0;
                                  if (check != parseInt(cpf.charAt(10)))
                                      return false;
                                  return true;


                              }
                          }
                      }
                  }
              }
          })

      });
      </script>
   </body>
</html>
