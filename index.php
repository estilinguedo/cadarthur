<?php
?>
    <html>
    <head>
    <title>Site Magnífico do Cleber</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script>

//         $(document).ready(function() {

//             function limpa_formulário_cep() {
//                 // Limpa valores do formulário de cep.
//                 $("#rua").val("");
//                 $("#bairro").val("");
//                 $("#cidade").val("");
//                 $("#uf").val("");
//                 $("#ibge").val("");
//             }
            
//             //Quando o campo cep perde o foco.
//             $("#cep").blur(function() {

//                 //Nova variável "cep" somente com dígitos.
//                 var cep = $(this).val().replace(/\D/g, '');

//                 //Verifica se campo cep possui valor informado.
//                 if (cep != "") {

//                     //Expressão regular para validar o CEP.
//                     var validacep = /^[0-9]{8}$/;

//                     //Valida o formato do CEP.
//                     if(validacep.test(cep)) {

//                         //Preenche os campos com "..." enquanto consulta webservice.
//                         $("#rua").val("...");
//                         $("#bairro").val("...");
//                         $("#cidade").val("...");
//                         $("#uf").val("...");
//                         $("#ibge").val("...");

//                         //Consulta o webservice viacep.com.br/
//                         $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

//                             if (!("erro" in dados)) {
//                                 //Atualiza os campos com os valores da consulta.
//                                 $("#rua").val(dados.logradouro);
//                                 $("#bairro").val(dados.bairro);
//                                 $("#cidade").val(dados.localidade);
//                                 $("#uf").val(dados.uf);
//                                 $("#ibge").val(dados.ibge);
//                             } //end if.
//                             else {
//                                 //CEP pesquisado não foi encontrado.
//                                 limpa_formulário_cep();
//                                 alert("CEP não encontrado.");
//                             }
//                         });
//                     } //end if.
//                     else {
//                         //cep é inválido.
//                         limpa_formulário_cep();
//                         alert("Formato de CEP inválido.");
//                     }
//                 } //end if.
//                 else {
//                     //cep sem valor, limpa formulário.
//                     limpa_formulário_cep();
//                 }
//             });
//         });

    </script>
    <script>
    	$(document).ready(function() {
    		var email = ""
    		var senha = ""
    		var nome = ""
    		$("#cadastro").show()
        	$("#login").hide()
        	$("#redefinir").hide()
    		$("#botaopaginalogin").click(function() {
    			$("#login").show()
    			$("#cadastro").hide()
    			$("#redefinir").hide()
        	})
    		$("#botaopaginacadastro").click(function() {
    			$("#cadastro").show()
    			$("#login").hide()
    			$("#redefinir").hide()
    		})
    		$("#botaopaginasenha").click(function() {
    			$("#redefinir").show()
    			$("#cadastro").hide()
    			$("#login").hide()
        	})
        	$("#botaocadastro").click(function() {
            	if ("" != $("input[name='nomecadastro']").val() && "" != $("input[name='emailcadastro']").val() && "" != $("input[name='senhacadastro']").val()){
            		email = $("input[name='emailcadastro']").val()
            		nome = $("input[name='nomecadastro']").val()
            		senha = $("input[name='senhacadastro']").val()
            		alert("Cadastro concluído!")
        		} else {
        			alert("Cadastro deu errado!")
        		}
        	})
        	$("#botaologin").click(function() {
				if (email == $("input[name='emaillogin']").val() && senha == $("input[name='senhalogin']").val() && "" != $("input[name='emaillogin']").val() && "" != $("input[name='senhalogin']").val()){
					alert("Login concluído!")
            	}else{
            		alert("O login deu errado!")
            	}
        	})
        	$("#botaoredefinir").click(function() {
            	if ("" != $("input[name='emailredefinir']").val()){
            		if (email == $("input[name='emailredefinir']").val()){
            			alert("e-mail encontrado")
                	}else{
                		alert("e-mail nao encontrado")
                    }
                } else {
					alert("e-mail vazio")
                }
        	})
    	})
    </script>
    </head>
    <body>
    <h1>Site Magnífico do Cleber</h1>
    <!-- Inicio do formulario -->
    <nav>
    	<button type="button" id="botaopaginalogin">Pagina login</button>
    	<button type="button" id="botaopaginacadastro">Pagina cadastro</button>
    	<button type="button" id="botaopaginasenha">Pagina senha</button>
    </nav>
    <div id="cadastro">
        	<h2>Cadastro</h2>
            <form>
                Email: <input type="email" name="emailcadastro" placeholder="fulano@gmail.com"> <br>
                Nome: <input type="text" name="nomecadastro" placeholder="Fulano de tal"><br>
                Senha: <input type="password" name="senhacadastro"><br>
            </form>
            <button type="button" id="botaocadastro">Cadastrar-me</button>
    </div>
    <div id="login">
    	<h2>Login</h2> 
    	<form>
                Email: <input type="email" name="emaillogin" placeholder="fulano@gmail.com"><br>
                Senha: <input type="password" name="senhalogin"><br>
        </form>
        <button type="button" id="botaologin">Logar</button>
    </div>
    <div id="redefinir">
    	<h2>Redefinir</h2>
    	<form>
                Email: <input type="email" name="emailredefinir" placeholder="fulano@gmail.com"><br>
        </form>
        <button type="button" id="botaoredefinir">Redefinir minha senha</button>
    </div>
<!--       <form method="get" action="."> -->
<!--         <label>Cep: -->
<!--         <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /></label><br /> -->
<!--         <label>Rua: -->
<!--         <input name="rua" type="text" id="rua" size="60" /></label><br /> -->
<!--         <label>Bairro: -->
<!--         <input name="bairro" type="text" id="bairro" size="40" /></label><br /> -->
<!--         <label>Cidade: -->
<!--         <input name="cidade" type="text" id="cidade" size="40" /></label><br /> -->
<!--         <label>Estado: -->
<!--         <input name="uf" type="text" id="uf" size="2" /></label><br /> -->
<!--         <label>IBGE: -->
<!--         <input name="ibge" type="text" id="ibge" size="8" /></label><br /> -->
<!--       </form> -->
    </body>

    </html>