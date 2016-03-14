<?php
    include ('header.php');
?>

     		 		<div class="clear"> </div>
     		 </div>
     		  <!----End-top-header----->
			<!---End-header---->
			<!---start-content---->
			<div class="content">
				<!-----start-contact----->
				<div class="contact">
                        <div class="tituloP">
						  <h2>Contato</h2>
                        </div>
				<div class="section group">
                    <div style="text-align: center;">
                        <p style="font-size: 1.5em; color: #04384a">

<?php
 
if(!isset($_POST[submit])) die("N&atilde;o recebi nenhum parametro. Por favor volte ao contato.html antes");
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='lidiane@gruposn.com.br'; // Substitua essa linha pelo seu e-mail@seudominio
} else {
        $emailsender = "trabalheconosco@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}

if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "não for Windows"
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo

$assunto        = 'Currículo Via Site Grupo SN';

$nome           = $_POST['nome'];
$cargo          = $_POST['cargo'];
$salario        = $_POST['salario'];
$nas            = $_POST['nas'];
$sexo           = $_POST['sexo'];
$idade          = $_POST['idade'];
$naturalidade   = $_POST['naturalidade'];
$estado         = $_POST['estado'];
$estadoCivil    = $_POST['estadoCivil'];
$filiacao       = $_POST['filiacao'];
$telefone       = $_POST['tel'];
$email          = $_POST['email'];
$end            = $_POST['end'];
$num            = $_POST['num'];
$bairro         = $_POST['bairro'];
$cep            = $_POST['cep'];
$cidade         = $_POST['cidade'];
$estado2        = $_POST['estado2'];

$dependente1    = $_POST['dependente1'];
$dependente2    = $_POST['dependente2'];
$dependente3    = $_POST['dependente3'];
$dependente4    = $_POST['dependente4'];
$dependente5    = $_POST['dependente5'];

$parentesco1    = $_POST['parentesco1'];
$parentesco2    = $_POST['parentesco2'];
$parentesco3    = $_POST['parentesco3'];
$parentesco4    = $_POST['parentesco4'];
$parentesco5    = $_POST['parentesco5'];

$nascimento1    = $_POST['nascimento1'];
$nascimento2    = $_POST['nascimento2'];
$nascimento3    = $_POST['nascimento3'];
$nascimento4    = $_POST['nascimento4'];
$nascimento5    = $_POST['nascimento5'];

$rg             = $_POST['rg'];
$cpf            = $_POST['cpf'];
$ctps           = $_POST['ctps'];
    
$fundamental    = $_POST['fundamental'];
$medio          = $_POST['medio'];
$superior       = $_POST['superior'];

$curso          = $_POST['curso'];
$instituicao    = $_POST['instituicao'];
$periodo        = $_POST['periodo'];
$inicio         = $_POST['inicio'];
$termino        = $_POST['termino'];
$cursos         = $_POST['cursos'];
$idiomas        = $_POST['idiomas'];

$objetivos      = $POST['objetivo'];
    
$empresa1           = $_POST['empresa1'];
$periodo_empresa1   = $_POST['periodo_empresa1'];
$contato_empresa1   = $_POST['contato_empresa1'];
$tel_empresa1       = $_POST['tel_empresa1'];
$cargo_empresa1     = $_POST['cargo_empresa1'];
$salario_empresa1   = $_POST['salario_empresa1'];
$motivo_empresa1    = $_POST['motivo_empresa1'];
$descricao_empresa1 = $_POST['descricao_empresa1'];

$empresa2           = $_POST['empresa2'];
$periodo_empresa2  = $_POST['periodo_empresa2'];
$contato_empresa2   = $_POST['contato_empresa2'];
$tel_empresa2       = $_POST['tel_empresa2'];
$cargo_empresa2     = $_POST['cargo_empresa2'];
$salario_empresa2   = $_POST['salario_empresa2'];
$motivo_empresa2    = $_POST['motivo_empresa2'];
$descricao_empresa2 = $_POST['descricao_empresa2'];

$empresa3           = $_POST['empresa3'];
$periodo_empresa3   = $_POST['periodo_empresa3'];
$contato_empresa3   = $_POST['contato_empresa3'];
$tel_empresa3       = $_POST['tel_empresa3'];
$cargo_empresa3     = $_POST['cargo_empresa3'];
$salario_empresa3   = $_POST['salario_empresa3'];
$motivo_empresa3    = $_POST['motivo_empresa3'];
$descricao_empresa3 = $_POST['descricao_empresa3'];

$aceito             = $_POST['aceito'];


$data               = date("d/m/Y"); 
$hora               = date("H:i:s");

 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Fillon soutient à fond le retour d\'un Grand Prix de France</title>
</head>
<body>
<h1>Currículo Recebido da Página Trabalhe Conosco do Site do Grupo SN</h1><br>
<hr><hr>
<p><b>Enviada por:</b> '.$nome.'</p>
<hr>
<h1>Dados Pessoais</h1>
<p><b>Nome:</b> '.$nome.'</p>
<p><b>Cargo:</b> '.$cargo.'</p> 
<p><b>Pretensão salarial:</b> '.$salario.'</p>
<p><b>Data de nascimento:</b> '.$nas.'</p>
<p><b>Sexo:</b> '.$sexo.'</p>
<p><b>Idade:</b> '.$idade.'</p>
<p><b>Naturalidade:</b> '.$naturalidade.'</p>
<p><b>Estado:</b> '.$estado.'</p>
<p><b>Estado civil:</b> '.$estadoCivil.'</p>
<p><b>Filiação:</b> '.$filiacao.'</p>
<p><b>Telefone:</b> '.$telefone.'</p>
<p><b>E-mail:</b> '.$email.'</p>
<p><b>Endereço:</b> '.$end.', <b>Nº:</b> '.$num.'</p>
<p><b>Bairro:</b>	'.$bairro.', <b>CEP:</b> '.$cep.', <b>Cidade:</b> '.$cidade.', <b>Estado:</b> '.$estado2.'</p>
<br><hr>
<h1>Dependentes</h1>
<h3>Dependente 1</h3>
<p><b>Nome: </b>'.$dependente1.' | <b>Parentesco: </b>'.$parentesco1.' | <b>Data de Nascimento: </b>'.$nascimento1.'</p>
<h3>Dependente 2</h3>
<p><b>Nome: </b>'.$dependente2.' | <b>Parentesco: </b>'.$parentesco2.' | <b>Data de Nascimento: </b>'.$nascimento2.'</p>
<h3>Dependente 3</h3>
<p><b>Nome: </b>'.$dependente3.' | <b>Parentesco: </b>'.$parentesco3.' | <b>Data de Nascimento: </b>'.$nascimento3.'</p>
<h3>Dependente 4</h3>
<p><b>Nome: </b>'.$dependente4.' | <b>Parentesco: </b>'.$parentesco4.' | <b>Data de Nascimento: </b>'.$nascimento4.'</p>
<h3>Dependente 5</h3>
<p><b>Nome: </b>'.$dependente5.' | <b>Parentesco: </b>'.$parentesco5.' | <b>Data de Nascimento: </b>'.$nascimento5.'</p>
		
<hr><hr>
<h1>Documentação</h1>
<p><b>RG:</b> '.$rg.'</p>
<p><b>CPF:</b>	'.$cpf.'</p>
<p><b>CTPS e Série:</b> '.$ctps.'</p>

<hr><hr>
<h1>Escolaridade</h1>
<p><b>Ensino Fundamental:</b> '.$fundamental.'</p>
<p><b>Ensino Médio:</b> '.$medio.'</p>
<p><b>Ensino Superior (Graduação):</b> '.$superior.'</p>
<br>
<h2>Formação Acadêmica</h2>
<p><b>Curso:</b> '.$curso.'</p>
<p><b>Instituição:</b> '.$instituicao.'</p>
<p><b>Período:</b> '.$periodo.'</p>
<p><b>Início:</b> '.$inicio.' | <b>Término:</b> '.$termino.'</p>
<p><b>Cursos:</b> '.$cursos.'</p>
<p><b>Idiomas:</b> '.$idiomas.'</p>

<hr><hr>
<h1>Objetivos</h1>
<p><b>Descrição:</b> '.$objetivos.'</p>

<hr><hr>
<h1>Referências Profissionais</h1>
<p><b>1 - Nome da Empresa:</b> '.$empresa1.'</p>
<p><b>Período:</b> '.$periodo_empresa1.'</p>
<p><b>Contato:</b> '.$contato_empresa1.'</p>
<p><b>Telefones:</b> '.$tel_empresa1.'</p>
<p><b>Seu cargo na empresa:</b> '.$cargo_empresa1.' | <b>Último salário:</b> '.$salario_empresa1.'</p>
<p><b>Motivo da saída:</b> '.$motivo_empresa1.'</p>
<p><b>Descrição Sumária:</b> '.$descricao_empresa1.'</p>
<br>
<p><b>2 - Nome da Empresa:</b> '.$empresa2.'</p>
<p><b>Período:</b> '.$periodo_empresa2.'</p>
<p><b>Contato:</b> '.$contato_empresa2.'</p>
<p><b>Telefones:</b> '.$tel_empresa2.'</p>
<p><b>Seu cargo na empresa:</b> '.$cargo_empresa2.' | <b>Último salário:</b> '.$salario_empresa2.'</p>
<p><b>Motivo da saída:</b> '.$motivo_empresa2.'</p>
<p><b>Descrição Sumária:</b> '.$descricao_empresa2.'</p>
<br>
<p><b>3 - Nome da Empresa:</b> '.$empresa3.'</p>
<p><b>Período:</b> '.$periodo_empresa3.'</p>
<p><b>Contato:</b> '.$contato_empresa3.'</p>
<p><b>Telefones:</b> '.$tel_empresa3.'</p>
<p><b>Seu cargo na empresa:</b> '.$cargo_empresa3.' | <b>Último salário:</b> '.$salario_empresa3.'</p>
<p><b>Motivo da saída:</b> '.$motivo_empresa3.'</p>
<p><b>Descrição Sumária:</b> '.$descricao_empresa3.'</p>
<p>'.$quebra_linha.'</p>


<hr><hr>
<h1>DECLARAÇÃO</h1>
<p>Declaro serem verdadeiras as informações aqui contidas, autorizo a empresa Indústria de Cal SN Ltda proceder às conferências e levantamentos necessários, estando
ciente da impossibilidade ao acesso de resultados dos testes e exames feitos durante o processo seletivo. Também declaro ter ciência de que o preenchimento da presente ficha não caracteriza qualquer vínculo empregatício entre mim e a Empresa, e que a mesma só será considerada havendo vaga e a critério da Empresa.<p>    
<p>Cadastrado:<b>'.$aceito.'</b></p>
<hr><hr>
<p><b>Data de Envio: </b>'.$data.'</p>
<p><b>Hora de Envio: </b>'.$hora.'</p>

<hr>
</body>
</html>
';
 
/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= 'Content-type: text/html; charset=utf-8'.$quebra_linha;
// Perceba que a linha acima cont�m "text/html", sem essa linha, a mensagem n�o chegar� formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
//$headers .= 'Cc: web@inoutonline.com.br' . $quebra_linha;
$headers .= 'Reply-To: ' . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */

//É obrigatório o uso do parámetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:

if(!mail('lidiane@gruposn.com.br', $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail('lidiane@gruposn.com.br', $assunto, $mensagemHTML, $headers );
}
 
/* Mostrando na tela as informações enviadas por e-mail */
print "
<br>
Cadastro Efetuado com sucesso!<br>
Entraremos em contato com você o mais breve possível.<br>
Obrigado por escolher o Grupo SN!<br>
<a href='".$_SERVER["HTTP_REFERER"]."'>Voltar</a>
"
?>
                    
                        </p>
                  </div>  
			  </div>
			</div>
				<!-----End-contact----->
				<div class="clear"> </div>
			<!---End-content---->
		</div>
		<!---End-wrap---->
		</div>
		</div>

<?php
    include ('footer.php');
?>