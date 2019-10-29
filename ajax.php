<?php
if($_POST['session']!=''){
    session_id($_POST['session']);
}
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-type: text/html; charset=utf-8');

include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
require 'cms/classes/phpmailer/class.phpmailer.php';

$num_ip= $_SERVER['REMOTE_ADDR'];
$date_time= date("Y-m-d H:i:s");
$act = $_REQUEST['act'];
$session = $_REQUEST['session'];
$stamp = time();
$arrRetorno = array();
switch ($act) {
    // ===============================================================
    case 'sendContato':
            $nome     = $_POST['nome'];
            $email    = $_POST['email'];
            $telefone = $_POST['telefone'];
            $celular  = $_POST['celular'];
            $cidade   = $_POST['cidade'];
            $estado   = $_POST['estado'];
            $assunto  = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            if($arrRetorno['ErroEnvio']==''){
                $body = '
                    <p>Olá '.$config_nomeCliente.', segue abaixo a mensagem recebida através do site:</p>
                    <p>
                      <b>Nome: </b>'.$nome.'<br>
                      <b>E-mail: </b>'.$email.'<br>
                      <b>Telefone: </b>'.$telefone.'<br>
                      <b>Celular: </b>'.$celular.'<br>
                      <b>Cidade: </b>'.$cidade.' - '.$estado.'<br>
                      <b>Assunto: </b>'.$assunto.'<br>
                    </p>
                    
                    <p style="text-align: center">
                      <b>Mensagem recebida: </b><br>'.$mensagem.'
                    </p>
                    ';
                $body = TemaCorpoEmail('CONTATO RECEBIDO PELO SITE', $body);

                $destinatario = $config_emailCliente;

                $mail = new PHPMailer();
                if($configSMTP_host!='' && $configSMTP_usuario !='' && $configSMTP_senha!=''){
                    $mail->IsSMTP();
                    $mail->Host = $configSMTP_host;
                    $mail->Username = $configSMTP_usuario;
                    $mail->Password = $configSMTP_senha;
                    $mail->SMTPAuth = true;
                    $mail->Port = 587;
                    $mail->Sender = $configSMTP_usuario; // Seu e-mail
                } else {
                    $mail->SMTPAuth = false;
                }
                $mail->CharSet = 'utf-8';
                $mail->From = $configSMTP_usuario; // Seu e-mail
                $mail->FromName = $nome; // Seu nome
                $mail->AddReplyTo($email);
                $mail->AddAddress($destinatario);

                $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
                $mail->Subject  = 'Mensagem recebida - Site '.$config_nomeCliente; // Assunto da mensagem
                $mail->Body = $body;

                $enviado = $mail->Send();

                // Limpa os destinatários e os anexos
                $mail->ClearAllRecipients();
                $mail->ClearAttachments();

                if($enviado){
                    GravaMailing($email, $nome, $telefone, $cidade.' - '.$estado,  'Contato', $assunto, $celular);
                    $arrRetorno['nome'] = $nome;
                } else {
                    $arrRetorno['ErroEnvio'] = 'Houve um erro durante o envio ( Erro: '. $mail->ErrorInfo.')';
                }
            }
            echo json_encode($arrRetorno);
        break;
    // ===============================================================
    case 'sendNewsletter':
            $nome  = $_POST['nome_news'];
            $email = $_POST['email_news'];

            if($arrRetorno['ErroEnvio']==''){
                GravaMailing($email, $nome, '', '',  'Newsletter', '', '');
                $arrRetorno['nome'] = $nome;
            }
            echo json_encode($arrRetorno);
        break;
    // ===============================================================
    case 'sendDados':
          $nome          = $_POST['nome'];
          $email         = $_POST['email'];
          $telefone      = $_POST['telefone'];
          $celular       = $_POST['celular'];
          $forma_contato = $_POST['forma_contato'];
          mysql_query("INSERT INTO site_tb_interessados (id, nome, email, telefone, celular, forma_contato, etapa) VALUES (null,'".$nome."','".$email."','".$telefone."','".$celular."','".$forma_contato."',1)");
          //--------------------
          $res = mysql_query("SELECT * FROM site_tb_interessados ORDER BY id DESC LIMIT 1");
          $row = mysql_fetch_array($res);
          $ref = $row['id'];
          //---------------------
          $arrRetorno['ref'] = $ref;
          echo json_encode($arrRetorno);
        break;
    // ===============================================================
    case 'sendLocalizacao':
          $estado          = $_POST['estado'];
          $cidade          = $_POST['cidade'];
          $regiao          = $_POST['regiao'];
          $tipo_negociacao = $_POST['tipo_negociacao'];
          $tipo_imovel     = $_POST['tipo_imovel'];
          $ref             = $_POST['ref'];

          mysql_query("UPDATE site_tb_interessados SET estado='".$estado."', cidade='".$cidade."', regiao='".$regiao."', tipo_negociacao='".$tipo_negociacao."', tipo_imovel='".$tipo_imovel."', etapa=2 WHERE id = $ref");
          
          $arrRetorno['ref'] = $ref;
          echo json_encode($arrRetorno);
        break;
    // ===============================================================
    case 'sendCaracteristicas':
          $tem_filhos   = $_POST['tem_filhos'];
          $qtd_filhos   = $_POST['qtd_filhos'];
          $tem_veiculos = $_POST['tem_veiculos'];
          $qtd_veiculos = $_POST['qtd_veiculos'];
          $area_imovel  = $_POST['area_imovel'];
          $valor_imovel = $_POST['valor_imovel'];
          $ref          = $_POST['ref'];

          mysql_query("UPDATE site_tb_interessados SET tem_filhos='".$tem_filhos."', qtd_filhos='".$qtd_filhos."', tem_veiculos='".$tem_veiculos."', qtd_veiculos='".$qtd_veiculos."', area_imovel='".$area_imovel."', valor_imovel='".$valor_imovel."', etapa=3 WHERE id = $ref");
          //--------------------
          $res = mysql_query("SELECT * FROM site_tb_interessados WHERE id = $ref");
          $row = mysql_fetch_array($res);
          //---------------------
          $body = '
              <p>Olá '.$config_nomeCliente.', segue abaixo o cadastro de interesse recebido através do site:</p>
              <p>
                <b>Nome: </b>'.$row['nome'].'<br>
                <b>E-mail: </b>'.$row['email'].'<br>
                <b>Telefone: </b>'.$row['telefone'].'<br>
                <b>Celular: </b>'.$row['celular'].'<br>
                <b>Forma de contato: </b>'.$row['forma_contato'].'<br>
                <b>Estado: </b>'.$row['estado'].'<br>
                <b>Cidade: </b>'.$row['cidade'].'<br>
                <b>Região: </b>'.$row['regiao'].'<br>
                <b>Tipo de negociação: </b>'.$row['tipo_negociacao'].'<br>
                <b>Tipo de imóvel: </b>'.$row['tipo_imovel'].'<br>
                <b>Possui filhos: </b>'.$row['tem_filhos'].'<br>
                <b>Quantos filhos: </b>'.$row['qtd_filhos'].'<br>
                <b>Possui veículos: </b>'.$row['tem_veiculos'].'<br>
                <b>Quantos veículos: </b>'.$row['qtd_veiculos'].'<br>
                <b>Área do imóvel desejado: </b>'.Moeda($row['area_imovel']).' m²<br>
                <b>Valor do imóvel desejado: </b>R$ '.Moeda($row['valor_imovel']).'<br>
              </p>
              ';
          $body = TemaCorpoEmail('CADASTRO DE INTERESSE RECEBIDO PELO SITE', $body);

          $destinatario = $config_emailCliente;

          $mail = new PHPMailer();
          if($configSMTP_host!='' && $configSMTP_usuario !='' && $configSMTP_senha!=''){
              $mail->IsSMTP();
              $mail->Host = $configSMTP_host;
              $mail->Username = $configSMTP_usuario;
              $mail->Password = $configSMTP_senha;
              $mail->SMTPAuth = true;
              $mail->Port = 587;
              $mail->Sender = $configSMTP_usuario; // Seu e-mail
          } else {
              $mail->SMTPAuth = false;
          }
          $mail->CharSet = 'utf-8';
          $mail->From = $configSMTP_usuario; // Seu e-mail
          $mail->FromName = $row['nome']; // Seu nome
          $mail->AddReplyTo($row['email']);
          $mail->AddAddress($destinatario);

          $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
          $mail->Subject  = 'Cadastro de interesse recebido - Site '.$config_nomeCliente; // Assunto da mensagem
          $mail->Body = $body;

          $enviado = $mail->Send();

          // Limpa os destinatários e os anexos
          $mail->ClearAllRecipients();
          $mail->ClearAttachments();

          $arrRetorno['nome'] = $row['nome'];
          echo json_encode($arrRetorno);
        break;
    // ===============================================================
}
?>