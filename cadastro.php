<?php 
   require_once("./classes/clsBancoDados.class.php");
   require_once("./conexao/conf_sessao.php");

   $objBD = new BancoDados();

   if($objBD->CriarAdministrador()) {
    $msgerro = "Usuario ADMINISTRADOR criado com sucesso!";
 }
   else {
    $msgerro = $objBD->msgErro();
    }
?>

<!DOCTYPE html>
<html lang="pt">
aaaaaaaaaa
<head>
    <meta charset="utf-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DogSafer - Rastreador GPS para cães</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cadastro.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script type="text/javascript">
        function ValidarSenha(){
            if(document.frmPrincipal.senha.value == document.frmPrincipal.senha2.value && document.frmPrincipal.senha2.value != "") {
                   //form.submit();
                   //window.location.replace("login.html");
            }else{
                    alert('As senhas são diferentes');
                    document.frmPrincipal.senha2.focus();
            }
          return true;
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggler mr-auto" data-toggle="collapse" data-target="#menu"><span class="navbar-toggler-icon"></span></button>
            <a class="navbar-brand" href="#">
                <img src="img/logodogsafer6.png" alt="logodogsaferweb" height="40px">
            </a>
            <a href="login.html" class="btn d-lg-none ml-auto" style="color:#ffffff;"><i class="fas fa-user"></i></a>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="index.html" class="nav-link"><i class="fas fa-home"></i>Home</a></li>
                    <li class="nav-item"><a href="institucional.html" class="nav-link">Institucional</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Produto</a></li>
                </ul>
                <a href="cart.php" class="btn ml-auto" style="color:#ffffff;"><i class="fas fa-shopping-cart"></i></a>
                <a href="login.html" class="btn d-none d-sm-none d-md-none d-lg-block" style="border-radius:40px;border:1px solid #00DBB4;color:#ffffff;"><i class="fas fa-user mr-2"></i>Área do cliente</a></a>
            </div>
        </div>
    </nav>

    <div class="container" id="cadastro1">
        <h1 class="my-5">Cadastro usuário</h1>
    <form id = "form" name="frmPrincipal" action="teste.php" method="">
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" pattern="^[^*]{2,50}$" title="Digite um nome de 2 a 50 caracteres" name="nome" placeholder="Nome" class="form-control" required>
                </div>

                <div class="form-group col-sm-6">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="CPF" class="form-control" required>
                </div>

                <div class="form-group col-sm-6">
                </div>
    
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" id="email" pattern="^([a-z0-9]+(?:[._-][a-z0-9]+)*)@([a-z0-9]+(?:[.-][a-z0-9]+)*\.[a-z]{2,})$" title="Preencha um e-mail" name="email" placeholder="E-mail" class="form-control" required>
                </div>

                <div class="form-group col-sm-6">
                </div>


                <div class="form-group col-sm-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Telefone" class="form-control" required>
                </div>

                <div class="form-group col-sm-6">
                </div>

                <div class="form-group col-sm-6">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" placeholder="CEP" class="form-control" required>
                </div>

                <div class="form-group col-sm-6">
                </div>

                 <div class="form-group col-sm-6">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" name="rua" placeholder="Rua" class="form-control" required>
                </div>

                <div class="form-group col-sm-3">
                    <label for="numero">Número</label>
                    <input type="numero" id="numero" name="numero" placeholder="Número" class="form-control" required>
                </div>

                <div class="form-group col-sm-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control" required>
                </div>

                 <div class="form-group col-sm-3">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" class="form-control" required>
                </div>

                 <div class="form-group col-sm-3">
                    <label for="estado">Estado</label>
                    <input type="text" id="uf" name="uf" placeholder="Estado" class="form-control" required>
                </div>

                <div class="form-group col-sm-12">
                  <h1 class="my-5">Cadastro do Pet</h1>
                    <label for="nome">Nome do Pet</label>
                    <input type="text" id="nomepet" pattern="^[^*]{2,20}$" title="Digite um nome de 2 a 50 caracteres" name="nomepet" placeholder="Nome do pet" class="form-control">
                </div>
                
                <div class="form-group col-sm-12">
                  <h1 class="my-5">Cadastrar senha de acesso</h1>
                </div>

                 <div class="form-group col-sm-6">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" Pattern="^.{6,10}$" title="Digite uma senha entre 6 e 10 caracteres" placeholder="Senha" class="form-control" required>
                </div>

                 <div class="form-group col-sm-6
                 ">
                    <label for="estado">Confirmar senha</label>
                    <input type="password" id="senha2" name="senha2" placeholder="Confirmar senha" class="form-control" required>
                </div>

                <div class="col mb-2">
                     <div class="col-sm-12  col-md-6">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 text-right my-5">
                    <button type = "submit" onclick="ValidarSenha();" id="prod1" class="btn btn-lg btn-block btn-success text-uppercase">Prosseguir</button>
                </div>

            </div>
        </form>
    </div>
              

    <section class="footer">
        <!-- Footer -->
        <footer id="footer" class="page-footer font-small">
            <!-- Footer Elements -->
            <div class="container">
                <!-- Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12 py-5">
                        <div class="mb-5 flex-center">
                            <!-- Facebook -->
                            <a class="icon">
                                <i class="fab fa-facebook-f fa-1x white-text mr-md-5 mr-3 fa-2x"></i>
                            </a>
                            <!-- Twitter -->
                            <a class="icon">
                                <i class="fab fa-twitter white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="icon">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Linkedin-->
                            <a class="icon">
                                <i class="fab fa-linkedin-in fa-lg white-text fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
            <!-- Footer Elements -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright. Todos os direitos reservados a DogSafer
            </div>
            <!-- Copyright -->
        </footer>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script>
        $('#cpf').mask('000.000.000-00');
        $('#cep').mask('00000-000');

            $("#telefone").keypress(function(event){
                if ($(this).val().length == 15){
                    $("#telefone").mask("(00) 00000-0009");
                }else{
                    $("#telefone").mask("(00) 0000-00009");
                }
    });

        $(document).ready(function() {
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");                     
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
    </script>

</body>

</html>