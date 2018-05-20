<?php
	$acao = $_REQUEST['acao'];

	if($acao=="Enviar")
	{
		$Nome = $_REQUEST['name'];
		$Email = $_REQUEST['email']
		$Telefone = $_REQUEST['phone'];
		$Observacoes = $_REQUEST['message'];
	
		//para o envio em formato HTML
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html;
		charset=UTF-8\r\n";
		
		//endere�o do remitente
		if($Email)
		{
			$headers .= "From: ".$Nome." <".$Email.">\r\n";
			$headers .= "Reply-To: ".$Email."\r\n";
		}
		else
		{
			$headers .= "From: ".$Nome." <contato@studioefestas.com.br>\r\n";
		}
		$ASSUNTO = "Orçamento via site";
		
		$MSG = "";
		if(!empty($Nome)) { $MSG .= "Nome: ".$Nome."<br>"; }
		if(!empty($Email)) { $MSG .= "E-mail: ".$Email."<br>"; }
		if(!empty($Telefone)) { $MSG .= "Telefone: ".$Telefone."<br>"; }
		if(!empty($Observacoes)) { $MSG .= "Observa��es: ".$Observacoes."<br>"; }

		mail("contato@studioefestas.com.br",$ASSUNTO,$MSG,$headers);

	}
?>